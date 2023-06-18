
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login</title>
</head>
<body>
    <div class="m-6 absolute"><a href="#" class="text-black">
            <i class='bx bx-arrow-back text-2xl'></i>
        </a>
    </div>
    @if (session() -> has('success'))
    <div class="flex justify-center">
        <div class="bg-green-200 border-l-4 border-green-500 text-green-700 p-4 w-3/5 absolute" role="alert">
            <p class="font-bold">Login Success <span>{{ session('success')}}</span></p>
        </div>
    </div>
    @endif
    @if (session() -> has('loginError'))
    <div class="flex justify-center">
        <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 w-3/5 absolute" role="alert">
            <p class="font-bold">{{'loginError'}}</p>
        </div>
    </div>
    @endif
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" style="background-color: white">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-28 w-auto my-0" src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="Your Company">
          <h2 class="mt-8 text-center text-2xl font-bold leading-9 tracking-tight text-gray-700">Sign in to your account</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/login" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-700">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" autofocus required value="{{old('email')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('email') invalid:ring-red-600 invalid:focus:ring-red-600 @enderror">
                        @error('email')
                        <div class="text-sm text-red-500">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-700">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-pink-600 hover:text-pink-500">Forgot password?</a>
                    </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 outline-none px-3">
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-pink-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Sign in</button>
                </div>
            </form>

          <p class="mt-9 text-center text-sm text-gray-500">
            Not registered?
            <a href="/register" class="font-semibold leading-6 text-pink-500 hover:text-pink-300">Register Now!</a>
          </p>
        </div>
      </div>
</body>
</html>
