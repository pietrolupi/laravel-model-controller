@extends('layouts.main')

@section('title')
    | Movie Details
@endsection

@section('content')

    <h1 class="text-center my-5">{{$movie->title}}</h1>

    <div class="d-flex detail-container p-5">
        <div class="img-container">
            <img src="{{asset('img/' . $movie->img ) }}" alt="">
        </div>
        <div class="text-container p-5">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero minima deserunt enim alias! Laboriosam cupiditate facilis magnam aliquam cumque et nulla veritatis. Quo reiciendis possimus natus facere vel soluta voluptatibus excepturi dolorem quia consequatur? Fugit minus, labore minima quia animi sunt unde soluta reprehenderit harum dicta, iste doloribus omnis voluptatum quos quisquam laudantium dolore quibusdam veniam porro totam distinctio officiis ducimus voluptates blanditiis! Eligendi alias facere voluptate enim accusamus quod dignissimos officiis officia. Recusandae placeat harum tempore, labore vero deserunt reprehenderit accusantium, temporibus nostrum ducimus quam aliquid corporis aperiam doloribus ab voluptas laboriosam molestiae id aliquam voluptates! Dolores corrupti odit ut tenetur vel, molestiae quos maiores, fugiat temporibus fuga distinctio autem eligendi ratione voluptas sunt! Assumenda, dolor distinctio nemo corrupti voluptatibus vero omnis sed eos. Et aperiam, distinctio voluptatibus beatae veritatis impedit repellat odio, veniam, quis nobis placeat deserunt recusandae vel voluptates rem tenetur. Tenetur rem nostrum, quibusdam repudiandae perferendis distinctio et voluptas culpa ipsa expedita reprehenderit dicta in natus id, provident cupiditate aperiam suscipit harum dolor, deleniti sequi ea exercitationem temporibus. Voluptatum repellendus qui quidem maxime animi ipsum est, voluptates atque cumque odio obcaecati vitae quaerat commodi eos laborum accusamus? Reprehenderit unde veniam deleniti modi alias consequuntur. Quo suscipit recusandae, consequatur autem, excepturi repudiandae repellat et maxime laboriosam id debitis, dolorum nulla expedita modi. Voluptates eum, deserunt est vero corrupti harum voluptas, tempora aliquam excepturi alias suscipit? Enim voluptatibus vel adipisci magni fuga? Dolore soluta labore eum libero doloremque nihil facere error facilis excepturi dolorum praesentium illum at ad laudantium a suscipit commodi quo, nemo non minus placeat. Optio, distinctio voluptatem, iste possimus non laborum similique consectetur impedit, rem explicabo autem molestias quis fuga labore error dolores voluptatibus qui nobis fugit. Voluptates, unde odio voluptate corrupti nisi culpa vitae officiis numquam explicabo voluptatem ipsam, quaerat fugit ad! Non vero, dolorum explicabo vitae deserunt rem necessitatibus a iure illo maxime laboriosam possimus. Distinctio eveniet eius quo facere doloribus quibusdam exercitationem accusamus laborum. Sequi, reprehenderit. Laboriosam velit officia, neque excepturi praesentium sequi corporis hic eos provident eaque consequuntur amet nostrum, asperiores voluptates voluptate nemo impedit veritatis corrupti voluptatum. Laudantium placeat maiores maxime aspernatur est dolores voluptatibus delectus iusto voluptatem quaerat quae iure, a accusamus quo dolor vitae nesciunt quibusdam quod excepturi nisi! In distinctio animi esse molestiae quam, doloribus similique aut! Magni sed provident optio quos. Officiis est reiciendis quis commodi doloribus nobis? Alias nemo et doloremque assumenda necessitatibus totam ratione!
        </div>
    </div>



@endsection
