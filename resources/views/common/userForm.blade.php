<div class="panel panel-default">
    <div class="panel-heading">新增用户</div>
    <div class="panel-body">
        <form>
            {{ csrf_field() }}
            <div class="form-horizontal">
                <div class="form-group">


                <label class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" placeholder="输入姓名">
                </div>
                <div class="col-sm-5">
                    <p class="form-control-static text-danger">姓名不能为空</p>
                </div>
                </div>
                <div class="form-group">


                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" class="foErm-control" id="email" placeholder="输入姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">邮箱不能为空</p>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
</div>