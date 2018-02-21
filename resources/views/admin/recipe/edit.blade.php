@extends('admin.base')

@section('title')
    编辑菜谱
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
                    <li class="active">编辑</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        编辑
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Default</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Help text</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rounder</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control round-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Input focus</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Disabled</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Placeholder</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label">Static control</label>
                                <div class="col-lg-4">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>


                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Input with success</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="inputSuccess">
                                </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="col-sm-3 control-label col-lg-3" for="inputWarning">Input with warning</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="inputWarning">
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label col-lg-3" for="inputError">Input with error</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="inputError">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Control sizing</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg m-b-10" type="text" placeholder=".input-lg">
                                    <input class="form-control m-b-10" type="text" placeholder="Default input">
                                    <input class="form-control input-sm m-b-10" type="text" placeholder=".input-sm">

                                    <select class="form-control input-lg m-b-10">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <select class="form-control m-b-10">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <select class="form-control input-sm m-b-10">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Checkboxes and radios</label>
                                <div class="col-lg-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that—be sure to include why it's great option one
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Inline checkboxes</label>
                                <div class="col-lg-4">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Selects</label>
                                <div class="col-lg-4">
                                    <select class="form-control m-b-10">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                    <select multiple="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Column sizing</label>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder=".col-lg-3">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" placeholder=".col-lg-4">
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder=".col-lg-5">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Basic examples</label>
                                <div class="col-lg-4">
                                    <div class="input-group m-b-10">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>

                                    <div class="input-group m-b-10">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Sizing</label>
                                <div class="col-lg-4">
                                    <div class="input-group input-group-lg m-b-10">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control input-lg" placeholder="Username">
                                    </div>

                                    <div class="input-group m-b-10">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group input-group-sm m-b-10">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Checkboxe and radio</label>
                                <div class="col-lg-4">
                                    <div class="input-group m-b-10">
                                                  <span class="input-group-addon">
                                                    <input type="checkbox">
                                                  </span>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-b-10">
                                                  <span class="input-group-addon">
                                                    <input type="radio">
                                                  </span>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Button addons</label>
                                <div class="col-lg-4">
                                    <div class="input-group m-b-10">
                                                  <span class="input-group-btn">
                                                    <button class="btn btn-white" type="button">Go!</button>
                                                  </span>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control">
                                                  <span class="input-group-btn">
                                                    <button class="btn btn-white" type="button">Go!</button>
                                                  </span>
                                    </div>

                                    <div class="input-group m-b-10">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Segmented buttons</label>
                                <div class="col-lg-4">
                                    <div class="input-group m-b-10">
                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>

            </div>
        </div>

    </section><!-- /.content -->
    @stop

    @section('script')
    @stop

