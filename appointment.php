<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'new era appointment</title>

    <!-- tailwindcss -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="./output.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <section id="navbar"
        class="navbar w-screen h-20 bg-transparent shadow-lg fixed top-0 left-0 z-10 transition-colors duration-300">
        <div class="logo h-full w-full flex items-center justify-center">
            <img src="./src/img/logo1 with name.png" alt="Logo" class="h-40">
            <div class="nav-links h-full w-3/4 flex items-center justify-end space-x-8 pr-10">
                <a href="#treatments"
                    class="text-sm font-medium text-black hover:text-green-600 scroll-link">Treatments</a>
                <a href="#sub-footer" class="text-sm font-medium text-black hover:text-green-600 scroll-link">Contact
                    us</a>
                <button
                    class="px-4 py-2 bg-black text-white text-sm font-medium rounded hover:bg-green-700 transition">Book
                    now</button>
            </div>

            <script>
                document.querySelectorAll('.scroll-link').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').replace('#', '');
                        const target = document.getElementById(targetId);
                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 70,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            </script>
        </div>
    </section>

    <div class="w-full h-full items-center justify-center">
        <div class="personal-info max-w-6xl mx-auto px-4 pt-24">
            <p class="text-3xl font-bold mt-20 mb-2">Personal Information</p>
            <p class="font-light mb-12">Please fill in the form below to book your appointment.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 max-w-6xl mx-auto px-3">

            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                <div class="mt-2">
                    <input id="first-name" type="text" name="first-name" autocomplete="given-name"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                <div class="mt-2">
                    <input id="last-name" type="text" name="last-name" autocomplete="family-name"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" type="email" name="email" autocomplete="email"
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>
            </div>

        </div>
    </div>

</body>

</html>