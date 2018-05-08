<div class="panel panel-default">
    <div class="panel-heading">新增文章</div>
    <div class="panel-body">
    <form method="post" action="{{url('article/save')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>标题</label>
            <input type="text" class="form-control" name="Article[title]" id="title" placeholder="标题">
        </div>

        <div class="form-group">
            <label>内容</label>
            <textarea class="form-control" rows="20" name="Article[content]" id="content"></textarea>
        </div>
        @section('article_form')
        @show
        <button type="submit" class="btn btn-primary">保存</button>
    </form>
    </div>
</div>