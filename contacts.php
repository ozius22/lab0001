<?php include 'components/navbar.php'; ?>

<body class="flex flex-col items-center">
    <form class="mt-16 mb-32" action="#">

        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-semibold">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600 font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-600 font-semibold">Feedback Category</label>
            <select id="category" name="category" class="w-full p-2 border border-gray-300 rounded-md" required>
                <option value="product">Product</option>
                <option value="service">Service</option>
                <option value="website">Website</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="comments" class="block text-gray-600 font-semibold">Comments</label>
            <textarea id="comments" name="comments" rows="4" class="w-full p-2 border border-gray-300 rounded-md" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring focus:ring-orange-300">Submit</button>
        </div>
    </form>
</body>

<?php include 'components/footer.php'; ?>
