@extends('layouts.neon')
@section('title')
    Neon | New Post
@endsection
@section('content')
    <form method="post" role="form">
        {{csrf_field()}}
        <!-- Title and Publish Buttons -->
        <div class="row">
            <div class="col-sm-2 post-save-changes">
                <button type="submit" class="btn btn-green btn-lg btn-block btn-icon">
                    Publish
                    <i class="entypo-check"></i>
                </button>
            </div>

            <div class="col-sm-10">
                <input type="text" class="form-control input-lg" name="title" id="title" placeholder="Post title" />
            </div>
        </div>

        <br />

        <!-- WYSIWYG - Content Editor -->
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="{{asset('assets/css/wysihtml5-color.css')}}" name="content" id="content"></textarea>
            </div>
        </div>

        <br />

        <!-- Metaboxes -->
        <div class="row">

            <!-- Metabox :: Publish Settings -->
            <div class="col-sm-4">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Publish Settings
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-1" checked>
                            <label>Show in frontpage</label>
                        </div>

                        <br />

                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="chk-2" checked>
                            <label>Stick this post</label>
                        </div>

                        <br />

                        <p>Publish Date</p>
                        <div class="input-group">
                            <input type="text" class="form-control datepicker" value="Wed, 04 November 2015" data-format="D, dd MM yyyy">

                            <div class="input-group-addon">
                                <a href="#"><i class="entypo-calendar"></i></a>
                            </div>
                        </div>

                        <br />

                        <p>Post Status</p>
                        <select name="test" class="selectboxit">
                            <optgroup label="Post Status">
                                <option value="1">Publish</option>
                                <option value="2">Private</option>
                                <option value="3">Protected</option>
                                <option value="4">Scheduled</option>
                            </optgroup>
                        </select>

                    </div>

                </div>

            </div>


            <!-- Metabox :: Featured Image -->
            <div class="col-sm-4">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Featured Image
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
                                <img src="http://placehold.it/320x160" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
                            <div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="..." accept="image/*">
									</span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Metabox :: Categories -->
            <div class="col-sm-4">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Categories
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <select name="category_id" class="form-control">
                            <option value="elem_1">Art</option>
                            <option value="elem_2" selected>Entertainment</option>
                            <option value="elem_3">Sports</option>
                            <option value="elem_4">Gaming</option>
                            <option value="elem_5" selected>Abstraction</option>
                            <option value="elem_6">Nature</option>
                            <option value="elem_7">Summer</option>
                            <option value="elem_8">Adventures</option>
                            <option value="elem_9">Movies</option>
                            <option value="elem_10">Music</option>
                            <option value="elem_11">Technology</option>
                        </select>

                    </div>

                </div>

            </div>

            <div class="clear"></div>

            <!-- Metabox :: Tags -->
            <div class="col-sm-12">

                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Tags
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">

                        <p>Add Post Tags</p>
                        <input type="text" value="weekend,friday,happy,awesome,chill,healthy" class="form-control tagsinput" />

                    </div>

                </div>

            </div>

        </div>

    </form>
@endsection
@section('style')
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/selectboxit/jquery.selectBoxIt.css')}}">
    <style>
        .ms-container .ms-list {
            width: 135px;
            height: 205px;
        }

        .post-save-changes {
            float: right;
        }

        @media screen and (max-width: 789px)
        {
            .post-save-changes {
                float: none;
                margin-bottom: 20px;
            }
        }
    </style>
@endsection
@section('script')
    <!-- Imported scripts on this page -->
    <script src="{{asset('assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js')}}"></script>
    <script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{asset('assets/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/js/fileinput.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/js/neon-chat.js')}}"></script>
@endsection
