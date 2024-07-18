@extends("todoapp.layout")
@section("content")
@section("title" , "Düzenle")

<div class="card-section">
        <div class="container">
            <div class="card-block mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
                        <div class="section-title mb-0" >
                            <h4 class="pb-2">Listeyi Düzenle</h4>
                            @if($errors->any())
                                <div class="alert alert-danger form-group">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li> {{$error}} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{route('Guncelle' , ['id' => $taskEdit->id])}}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control Light grey background color" name="baslik" value="{{$taskEdit->tasks_title}}">
                                </div>
                                <div class="input-group mt-4">
                                    <input type="text" class="form-control Light grey background color" name="gorev" value="{{$taskEdit->tasks_description}}" >
                                </div>
                                <button type="submit" class="btn btn-outline-light mt-4  ">Düzenle</button>
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