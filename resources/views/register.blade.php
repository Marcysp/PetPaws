
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body>
    <div class="m-6 absolute"><a href="#" class="text-black">
            <i class='bx bx-arrow-back text-2xl'></i>
        </a>
    </div>
    <div class="flex sm:mx-auto sm:w-full sm:max-w-4xl">
        <div class="min-h-full flex-col justify-center pl-20 pr-20 py-28 lg:px-8 w-2/5">
            <img class="mx-auto h-40 w-auto my-0" src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-700">Registered New Account</h2>
        </div>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-1/2">
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-700">Email address</label>
                        <div class="mt-2">
                            <input required id="email" name="email" type="email" autocomplete="email" value="{{old('email')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none @error('email') invalid:ring-red-600 @enderror">
                        </div>
                        @error('email')
                        <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-700">Name</label>
                        <div class="mt-2">
                            <input required id="name" name="name" type="text" autocomplete="name" value="{{old('name')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('name') invalid:ring-red-600 @enderror">
                        </div>
                        @error('name')
                        <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror

                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-700">Password</label>
                        </div>
                        <div class="mt-2">
                            <input required id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 outline-none px-3 @error('password') invalid:ring-red-600 @enderror">
                        </div>
                        @error('password')
                        <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror
                    </div>
                    {{-- <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-800">Confirm Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 outline-none px-3">
                        </div>
                    </div> --}}
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-pink-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Register</button>
                    </div>
                </form>

              <p class="mt-9 text-center text-sm text-gray-500">
                Already have an account?
                <a href="/login" class="font-semibold leading-6 text-pink-500 hover:text-pink-300">Login</a>
              </p>
            </div>
          </div>
    </div>
</body>
</html>
