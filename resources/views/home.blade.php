<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Home page</title>
</head>
<body>
    @include('header')
    
    <div class="shadow-md">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Father name</th>
                    <th scope="col" class="px-6 py-3">Contact</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">City</th>
                    <th scope="col" class="px-6 py-3">Pin code</th><th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sdata as $row)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$row->id}}</th>
                    <td class="px-6 py-4">{{$row->name}}</td>
                    <td class="px-6 py-4">{{$row->father_name}}</td>
                    <td class="px-6 py-4">{{$row->contact}}</td>
                    <td class="px-6 py-4">{{$row->email}}</td>
                    <td class="px-6 py-4">{{$row->city}}</td>
                    <td class="px-6 py-4">{{$row->pin_code}}</td>
                    <td class="px-6 py-4  flex gap-4 ">
                        <a href="{{route('student.edit',$row->id)}}" class="h-5 w-5  mt-1"><img src="https://images.onlinelabels.com/images/clip-art/biswajyotim/biswajyotim_Pen.png" class="hover:h-8 hover:w-10"/></a>
                        <a href="" class="h-5 w-5 mt-2"><img src="https://th.bing.com/th/id/R.e6560009f0efa8e573b7332a68f3c387?rik=Lqgjn%2bq4vlj0pA&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2fdi8%2fX56%2fdi8X56kdT.png&ehk=f%2f%2bq3d8x9x5o5nONICwbJJ6fSkEu%2bNjghdll7ivpRZQ%3d&risl=&pid=ImgRaw&r=0" class="hover:h-5 hover:w-10"/></a>
                        <form action="{{route('student.destroy',$row)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type='submit' value=''/>
                            <svg width="20" height="20" viewBox="0 0 24 24" class="-mt-5 cursor-pointer"><path fill='#FF0000' d="M15 4V3H9v1H4v2h1v13c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6h1V4h-5zm2 15H7V6h10v13z"></path><path fill='#FF0000' d="M9 8h2v9H9zm4 0h2v9h-2z"></path></svg>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col">
        {!!$sdata->links()!!}
    </div>
    @include('footer')
</body>
</html>