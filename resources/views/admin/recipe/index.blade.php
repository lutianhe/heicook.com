@extends('admin.base')

@section('title')
    菜谱管理
    @stop

    @section('head')
    @stop

    @section('content')
            <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> 首页</a></li>
                    <li><a href="#">菜谱管理</a></li>
                    <li class="active">列表</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <header class="panel-heading">
                        菜谱列表
                    </header>
                    <!-- <div class="box-header"> -->
                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                    <!-- </div> -->
                    <div class="panel-body table-responsive">
                        <div class="box-tools m-b-15">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a class="btn btn-primary" href="/admin/recipe/edit">新增</a>
                                    <button type="button" class="btn btn-default">Default</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control pull-right" style="width: 150px;" placeholder="Search"/>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>操作</th>
                            </tr>

                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Jane Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-danger">Denied</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>

                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Jane Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-danger">Denied</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>

                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Jane Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-danger">Denied</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>

                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Jane Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary">编辑</button>
                                    <button type="button" class="btn btn-sm btn-danger">删除</button>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>11-7-2014</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                                </td>
                            </tr>

                        </table>
                        <div class="table-foot">
                            <ul class="pagination m-b-10 m-t-10 pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@stop

@section('script')
@stop