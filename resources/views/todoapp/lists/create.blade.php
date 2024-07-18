@extends("todoapp.layout")
@section("content")
@section("title" , "Görev Ekle")

<div class="card-section">
        <div class="container">
            <div class="card-block mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            @if($errors->any())
                                <div class="alert alert-danger form-group">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li> {{$error}} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{route('Ekle')}}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control Light grey background color" name="baslik" placeholder="Başlık">
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control Light grey background color" name="gorev" placeholder="Görev Ekle">
                                </div>
                                <button type="submit" id="add" class="btn btn-outline-light mt-4 btn-block  ">Ekle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

@endsection
@section("css") @endsection
@section("js") @endsection
            