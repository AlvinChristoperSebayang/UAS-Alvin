<x-app-layout>
    <h1 class="pb-5 text-4xl font-bold text-center">Data Pesanan</h1>
    
    <div class="flex justify-center">

        
        @foreach ($pesanans as $pesanan)  
            <div class="text-center rounded-lg border-solid border-2 border-black w-[40%]">
                <h2>Id Pesanan :{{$pesanan->id}}</h2>
                <h2>{{$pesanan->nama}}</h2> 
                <h2>{{$pesanan->namaMakanan}}</h2>
                <h2>{{$pesanan->porsi}}</h2>
                <h2>{{$pesanan->alamat}}</h2>
                <h2>{{$pesanan->jenisPembayaran}}</h2>

                <h2>{{$pesanan->keterangan}}</h2>
                <button>
                    <a href="{{url('/editUser/'.$pesanan->id)}}" class="bg-green-500 hover:bg-green-400 text-white px-6 rounded-lg">Edit</a>
                </button>
            </div>
            @endforeach
    </div>
</x-app-layout>
