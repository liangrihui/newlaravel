
	@extends('layouts.article')

    @section('content')
        @include('common.alert_message')
        <div class="panel panel-default">
            <div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>状态</th>
                    <th>作者</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->status==10?'发布':'草稿'}}</td>
                        <td>{{$article->user->name}}</td>
                        <td>{{date('Y-m-d H:i:s',$article->created_at)}}</td>
                        <td>
                            <a href="">查看</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div>
                <div class="text-center">
                    {{--{{$articles->links()}}--}}
                    {{$articles->render()}}
                </div>
            </div>

        </div>
        @endsection