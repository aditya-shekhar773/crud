<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
</head>
<body>
    @include ('header')
    <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between bg-yellow-400">
        <div class="w-2/5">
            <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="w-full mt-20 ml-10" alt="Phone image" />
        </div>
        <div class="w-3/5">
            <form method="POST" action="{{route('student.store')}}">
                @csrf
                <div class="w-full">
                    <div class="ml-44">
                        <div class="w-96">
                            <label>Name</label>
                            <input type="text" name="name" class="w-full py-2 border rounded-lg"/>
                        </div>
                        <div class="w-96">
                            <label>Father name</label>
                            <input type="text" name="father_name" class="w-full py-2 border rounded-lg"/>
                        </div>
                        <div class="w-96">
                            <label>Contact</label>
                            <input type="number" name="contact" class="w-full py-2 border rounded-lg"/>
                            @error('contact')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-96">
                            <label>Email</label>
                            <input type="email" name="email" class="w-full py-2 border rounded-lg"/>
                            @error('email')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-96">
                            <label>City</label>
                            <input type="text" name="city" class="w-full py-2 border rounded-lg"/>
                        </div>
                        <div class="w-96">
                            <label>Pin code</label>
                            <input type="text" name="pin_code" class="w-full py-2 border rounded-lg"/>
                        </div>
                        <div class="w-96 mt-5">
                            <input type="submit" name="submit" class="w-full py-2 border rounded-lg bg-white text-black font-semibold text-sm"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('footer')
</body>
</html>