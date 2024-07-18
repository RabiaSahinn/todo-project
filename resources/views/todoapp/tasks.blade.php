@extends("todoapp.layout")
@section("content")
@section("title" , "TodoApp")

<div class="card-section">
    <div class="container">
        <div class="card-block ">
            <div class="card-title">
                <h6 class="text-center"> Görev Listesi</h6>
                <div class="container pt-2">
                    <div class="row">
	                    <div class="col-lg-12">
		                    <div class="main-box clearfix">
			                    <div class="table-responsive">
				                    <table class="table user-list">
			
					                    <tbody>
						                <tr>
                                        @foreach($data["task"] as $task)
                                        
							                <td>
								                <span class="user-subhead">
                                                    {{$task->tasks_description}}
                                                </span>
							                </td>
						
                                            <td style="width: 20%;">
                                                <a href="{{route('Duzenle', $task->id)}}" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="{{route('Sil' , $task->id)}}" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
						                </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{route('GorevEkle')}}" class="btn btn-light btn-sm btn-block ">Görev Ekle</a>
						
		                        </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
@section("css") @endsection
@section("js") @endsection