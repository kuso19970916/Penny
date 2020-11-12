<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    
    <link rel="stylesheet" href="{{ asset('css/penny.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid back">
        <div class="row">
            <img src="{{URL::asset('/image/smalllogo.png')}}" class="col-2 pt-3" alt="">
            <div class="col-10">
                <div class="dropdown text-right pt-3">
                    <button class="btn btn-secondary dropdown-toggle pull-right" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="submit">登出</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            
            
        </div>
        <div class="row">
            <div class="col-md-11 row justify-content-md-center">
            <div class=" month">
                NOVEMBER
            </div>
            </div>
            <div class="col-md-1">
            <button type="button" class="btn btn-outline-warning"  data-toggle="modal" data-target="#exampleModal">新增</button>
            </div>
        </div>

        <div class="list">
            <div class="row justify-content-md-center mt-3">
                <div class="col-md-1 text-center list_top pt-2 mr-2">
                    <h5>收/支</h5>
                </div>
                <div class="col-md-1 text-center list_top pt-2 mr-2">
                    <h5>類型</h5>
                </div>
                <div class="col-md-2 text-center list_top pt-2 mr-2">
                    <h5>名稱</h5>
                </div>
                <div class="col-md-2 text-center list_top pt-2 mr-2">
                    <h5>日期</h5>
                </div>
                <div class="col-md-1 text-center list_top pt-2 mr-2">
                    <h5>金額</h5>
                </div>
                <div class="col-md-2 text-center list_top pt-2 mr-2">
                    <h5>備註</h5>
                </div>
            </div>
            @foreach ($sales as $bill)
            <div class="row justify-content-md-center mt-3">
               
                    <div class="col-md-1 text-center">
                        @if ($bill->status ==1)
                            -
                        @else
                            +
                        @endif
                        
                    </div>
                    <div class="col-md-1 text-center pt-2 mr-2">
                        <h5>{{$bill->class}}</h5>
                    </div>
                    <div class="col-md-2 text-center pt-2 mr-2">
                        <h5>{{$bill->name}}</h5>
                    </div>
                    <div class="col-md-2 text-center pt-2 mr-2">
                        <h5>{{$bill->date}}</h5>
                    </div>
                    <div class="col-md-1 text-center pt-2 mr-2">
                        <h5>{{$bill->price}}</h5>
                    </div>
                    <div class="col-md-2 text-center pt-2 mr-2">
                        <h5>{{$bill->description}}</h5>
                    </div>
               
            </div>
            @endforeach
        </div>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="block_back modal-content">
                    <div class="row">
                        <div class="ml-5 pl-5 col-7">
                            <h1 id="add_title" class="modal-title" id="exampleModalLabel">支出</h1>
                        </div>
                        <div class="col-2 pt-3">
                            <button id="add_btn" type="button" class="income_btn" onclick="change_status()">收入</button>
                        </div>
                    </div>
                    <form method="POST" action="/sales">
                        @csrf
                        <div class="modal-body">
                                <input name="status" type="hidden" value="1">
                                <div class=" row justify-content-md-center">
                                    <div class="input-group input-group-sm mb-3 col-md-5">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">名稱</span>
                                        </div>
                                        <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3 col-md-5">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">類型</span>
                                        </div>
                                        <input type="text" class="form-control" name="class" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class=" row justify-content-md-center">
                                    <div class="input-group input-group-sm mb-3 col-md-5">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">金額</span>
                                        </div>
                                        <input type="text" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                    <div class="input-group input-group-sm mb-3 col-md-5">
                                    </div>
                                </div>
                                <div class=" row justify-content-md-center">
                                    <div class="input-group input-group-sm mb-3 col-md-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">備註</span>
                                        </div>
                                        <input type="text" class="form-control" name="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                        </div>
                        <div class="pb-5 row ">
                            <button type="submit" class="btn btn-warning offset-md-5" >確認</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="next" name="button"><h3>NEXT</h3></button>

        </div>
    </div>
</body>
<script>
    let Income = false;
    
    function change_status() {
        Income =!Income;
        if (Income) {
            $('#add_title').text("收入");
            $('#add_btn').text("支出");
            $("input[name='status']").val(0);
        }else{
            $('#add_title').text("支出");
            $('#add_btn').text("收入");
            $("input[name='status']").val(1);
        }
    }
    
    
</script>
</html>
