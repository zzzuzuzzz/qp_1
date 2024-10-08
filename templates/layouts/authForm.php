<form method="post">
    <div class="mt-8 max-w-md">
        <div class="grid grid-cols-1 gap-6">
            <div class="block">
                <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                <input id="fieldEmail" value="<?=htmlspecialchars($email) ?? ''?>" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
            </div>
            <div class="block">
                <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                <input id="fieldPassword" value="<?=htmlspecialchars($password) ?? ''?>" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******">
            </div>
            <div class="block">
                <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Войти
                </button>
                <a href="/register.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                    У меня нет аккаунта
                </a>
            </div>
        </div>
    </div>
</form>