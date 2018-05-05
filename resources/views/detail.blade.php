@extends('template.layout')

@section('title')
    {{$book->name}}
@endsection

@section('content')
    <section class="section">
        <h3 class="title">{{$book['name']}}</h3>
        <div class="section-body">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <img src="{{url('img/tuoi-tre-dang-gia-bao-nhieu.jpg')}}" alt="aa">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <ul class="book-detail">
                        <li class="name">
                            <a href="{{route('ebook',$book->id)}}">
                                <h1>{{$book['name']}}</h1>
                            </a>
                        </li>
                        <li> Tác giả : {{$book->author}}</li>
                        <li> Thể loại : {{$book->category}}</li>
                        <li>View : {{$book->view}}</li>
                    </ul>
                    <a href="" class="btn btn-success">Đọc ngay</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <h3 class="title">Bạn có thể thích</h3>
        <div class="section-body">
            <div class="row" id="recommenderA">
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.ajax({
               url: 'http://127.0.0.1:5000/fake-user-rate/{{rand(10000000,100000000)}}/{{$book->id}}',
                type: 'get',
                headers: {
                    'Access-Control-Allow-Origin': '*'
                },
                success: function (result) {
                    $.ajax({
                        url: '{{route('recommenderA')}}',
                        type: 'post',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            bookId: result
                        },
                        success: function (result) {
                            $('#recommenderA').append(result);
                        }
                    });
                }
            });
        });
    </script>
@endsection