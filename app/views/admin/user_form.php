<?php
$title = isset($user) ? 'Edit User' : 'Create User';
$title .= ' - Admin Panel';
?>
<?php include(APP_ROOT . '/app/views/partials/admin_header.php') ?>
<main class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6"><?= $title ?></h1>
    
    <?php if (isset($error)): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb极-4" role="alert">
            <span class="block sm:inline"><?= $error ?></span>
        </div>
    <?php endif; ?>
    
    <form action="/admin/users/<?= isset($user) ? 'edit/' . $user['id'] : 'create' ?>" method="POST">
        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" required
                    value="<?= isset($user) ? htmlspecialchars($user['username']) : '' ?>" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-rm-blue focus:ring focus:ring-rm-blue focus:ring-opacity-50">
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    value="<?= isset($user) ? htmlspecialchars($user['email']) : '' ?>" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-rm-blue focus:ring focus:ring-rm-blue focus:ring-opacity-50">
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password <?= isset($user) ? '<span class="text-gray-500">(leave blank to keep current)</span>' : '' ?>
                </label>
                <input type="password" name="password" id="password" <?= isset($user) ? '' : 'required' ?> 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-rm-blue focus:ring focus:ring-rm-blue focus:ring-opacity-50">
            </div>
            
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-rm-blue focus:ring focus:ring-rm-blue focus:ring-opacity-50">
                    <option value="admin" <?= (isset($user) && $user['role'] === 'admin') ? 'selected' : '' ?>>Admin</option>
                    <option value="editor" <?= (isset($user) && $user['role'] === 'editor') ? 'selected' : '' ?>>Editor</option>
                    <option value="contributor" <?= (isset($user) && $user['role'] === 'contributor') ? 'selected' : '' ?>>Contributor</option>
                </select>
            </div>
            
            <div class="flex justify-end space-x-4">
                <a href="/admin/users" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md font-medium hover:bg-gray-400 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-rm-gold text-rm-blue px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition">
                    <?= isset($user) ? 'Update User' : 'Create User' ?>
                </button>
            </div>
        </div>
    </form>
</main>
<?php include(APP_ROOT . '/app/views/partials/admin_footer.php') ?>
