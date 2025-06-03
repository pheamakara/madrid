<?php
$title = 'Manage Users - Admin Panel';
?>
<?php include(APP_ROOT . '/app/views/partials/admin_header.php') ?>
<main class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Manage Users</h1>
    
    <div class="mb-4">
        <a href="/admin/users/create" class="bg-rm-gold text-rm-blue px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition">
            <i class="fas fa-plus mr-2"></i>Add New User
        </a>
    </div>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($users as $user): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">#<?= $user['id'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($user['username']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($user['email']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            <?= $user['role'] === 'admin' ? 'bg-red-100 text-red-800' : 
                                 ($user['role'] === 'editor' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800') ?>">
                            <?= ucfirst($user['role']) ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= date('M d, Y', strtotime($user['created_at'])) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="/admin/users/edit/<?= $user['id'] ?>" class="text-rm-blue hover:text-rm-gold mr-3">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="/admin/users/delete/<?= $user['id'] ?>" class="text-red-600 hover:text-red-900" 
                           onclick="return confirm('Are you sure you want to delete this user?')">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php include(APP_ROOT . '/app/views/partials/admin_footer.php') ?>
