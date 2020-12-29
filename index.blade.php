@extends('user.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-12">
                <div class="search-meta">
                    <span>
                        Your search result for 
                        "<i><span id="search_result"></span></i>" 
                        <span id="search_result_count"></span>
                    </span>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar static left">
                    <div class="widget">
                        <h4 class="widget-title">Filter Search</h4>
                        <form class="c-form search" method="post">
                            <div>
                                <label>Gender</label>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label> <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>Male </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>Female </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>Custom </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label>Post From</label>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label> <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>Public </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>You </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>Your Friends </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>Your Group and pages </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label>Post Type</label>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label> <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>All Posts </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>Posts you seen </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label>Post in Group</label>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label> <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>Any Group </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>your Group </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label>Location</label>
                                <div class="form-radio">
                                    <div class="radio">
                                        <label> <input type="radio" checked="checked" name="radio" /><i class="check-box"></i>World wide </label>
                                    </div>
                                    <div class="radio">
                                        <label> <input type="radio" name="radio" /><i class="check-box"></i>your Country </label>
                                    </div>
                                    <div class="radio">
                                        <a href="#" title="">
                                            Targeted location
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="advertisment-box">
                        <h4 class="">advertisment</h4>
                        <figure>
                            <a href="#" title="Advertisment"><img src="images/resources/ad-widget.gif" alt="" /></a>
                        </figure>
                    </div>
                    <div class="widget">
                        <div class="banner medium-opacity purple">
                            <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg);"></div>
                            <div class="baner-top">
                                <span><img alt="" src="images/book-icon.png" /></span>
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                            <div class="banermeta">
                                <p>
                                    create your own favourit page.
                                </p>
                                <span>like them all</span>
                                <a data-ripple="" title="" href="#">start now!</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- sidebar -->
            <div class="col-lg-7">
                <div class="search-tab">
                    <ul class="nav nav-tabs tab-btn">
                        <li class="nav-item"><a class="active" href="#All" data-toggle="tab">All</a></li>
                        <li class="nav-item"><a class="" href="#people" data-toggle="tab">People</a></li>
                        <!-- <li class="nav-item"><a class="" href="#photos" data-toggle="tab">Photos</a></li>
                        <li class="nav-item"><a class="" href="#videos" data-toggle="tab">Videos</a></li>
                        <li class="nav-item"><a class="" href="#posts" data-toggle="tab">Posts</a></li>
                        <li class="nav-item"><a class="" href="#pages" data-toggle="tab">Pages</a></li>
                        <li class="nav-item"><a class="" href="#groups" data-toggle="tab">Groups</a></li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        @include('user.search.all')
                        @include('user.search.people')

                        {{--
                            @include('user.search.photos')
                            @include('user.search.videos')
                            @include('user.search.posts')
                            @include('user.search.pages')
                            @include('user.search.groups') 
                        --}}
                    </div>
                    <div class="central-meta item">
                        <span class="create-post">Related Searches</span>
                        <ul class="related-searches">
                            <li><a href="#" title="">jack carter jr.</a></li>
                            <li><a href="#" title="">jack carter Pool</a></li>
                            <li><a href="#" title="">jack carter fdny </a></li>
                            <li><a href="#" title="">jack carter chevrolet cadillac </a></li>
                            <li><a href="#" title="">jack jack </a></li>
                        </ul>
                    </div>
                    <!-- Related Searches -->
                </div>
            </div>
            <!-- <div class="col-lg-2">
                <aside class="sidebar">
                    <div class="wiki-box">
                        <h4>
                            <img src="images/wiki.png" alt="" />
                            Content from the Wikipedia article <a href="https://en.wikipedia.org/wiki/Jack_Carter_(politician)" title="" target="_blank">Jack Carter</a>
                        </h4>
                        <p>
                            John William Carter is an American businessman and politician who unsuccessfully ran for the United States Senate in Nevada in 2006.
                            <span>Born:</span> July 3, 1947 (age 72) <span>Education:</span> Emory University, Georgia Institute of Technology, Georgia Southwestern State University
                            <a class="underline" href="https://en.wikipedia.org/wiki/Jack_Carter_(politician)" target="_blank" title="">Read More</a>
                        </p>
                        <div class="helpful">
                            <span>Was this information helpful?</span>
                            <ul class="add-remove-frnd">
                                <li class="add-tofrndlist">
                                    <a href="#" title="Add friend"><i class="fa fa-thumbs-up"></i></a>
                                </li>
                                <li class="remove-frnd">
                                    <a href="#" title="Send Message"><i class="fa fa-thumbs-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="advertisment-box stick-widget">
                        <h4 class="">advertisment</h4>
                        <figure>
                            <a href="#" title=""><img src="images/ad-baner.jpg" alt="" /></a>
                        </figure>
                    </div>
                </aside>
            </div> -->
        </div>
    </div>
</div>


@endsection

@section('script')

    <script type="text/javascript">

        $(document).on('ready', function(){
            
            var value = $('#any_search').val();

            $.ajax({
                type : "get",
                url  : "{{ route('search') }}",
                data : { any_search : "{{$_GET['any_search']}}"},
                success:function(data){
                    
                    $('#search_result').html(data.any_search);
                    $('#search_result_count').html(data.users.length);

                    var people_data = '';

                    $.each(data.users, function( index, value ) {
                        
                        people_data +=
                            '<div class="pit-friends">' +
                                '<figure>' +
                                    '<a href="#" title=""><img src="images/resources/searching1.jpg" alt="" /></a>' +
                                '</figure>' +
                                '<div class="pit-frnz-meta">' +
                                    '<a href="#" title="">'+value.name+'</a>' +
                                    '<i>'+value.email+'</i>' +
                                    '<ul class="add-remove-frnd">';

                                        if(value.isfreindrequestsent == false){
                                            
                                            //already friend to remove friend btn
                                            if(value.isFriendWith == true){
                                                people_data += '<li class="remove-frnd" id="userid_'+value.id+'">' + 
                                                                    alreadyFriendRequestBtn(value.id) +
                                                                '</li>';
                                            }else{
                                                //send friend request to new
                                                people_data += '<li class="remove-frnd" id="userid_'+value.id+'">' + 
                                                                    sendFriendRequestBtn(value.id) + 
                                                                '</li>';
                                            }
                                        }
                                        else{
                                            //cancel friend request
                                            people_data += '<li class="remove-frnd" id="userid_'+value.id+'">' + 
                                                                cancelFriendRequestBtn(value.id) +
                                                            '</li>';
                                        }

                                        people_data +='<li class="remove-frnd">' +
                                            '<a title="Send Message" href="#"><i class="fa fa-comment"></i></a>' +
                                        '</li>' +
                                    '</ul>' +
                                '</div>' +
                            '</div>';
                    });
                    $('.people-data').html(people_data);
                }
            });
        });

        $(document).on('click', '.addFriend', function(){
            var user_id = $(this).attr('value');

            $.ajax({
                type : "post",
                url  : "{{ route('add-friend') }}",
                data : { 
                    "_token": "{{ csrf_token() }}",
                    user_id : user_id
                },
                success:function(data){ 
                    
                    if(data.msg == "success"){
                        var html = cancelFriendRequestBtn(user_id);
                        $("#userid_"+user_id).html(html);
                    }
                    // console.log(data);                    
                }
            });
        });

        $(document).on('click', '.cancelFriend', function(){
            var user_id = $(this).attr('value');
            $.ajax({
                type : "post",
                url  : "{{ route('cancel-friend') }}",
                data : { 
                    "_token": "{{ csrf_token() }}",
                    user_id : user_id
                },
                success:function(data){

                    if(data.msg == "success"){
                        var html = sendFriendRequestBtn(user_id);
                        $("#userid_"+user_id).html(html);
                    }                   
                }
            });
        });
        
        function sendFriendRequestBtn(id)
        {
            return '<a href="javascript:void(0)" title="Send friend request" value="'+id+'" class="addFriend"><i class="fa fa-user-plus"></i></a>';
        }

        function cancelFriendRequestBtn(id)
        {
            return '<a href="javascript:void(0)" title="Cancel friend request" value="'+id+'" class="cancelFriend"><i class="fa fa-times"></i></a>';
        }

        function alreadyFriendRequestBtn(id)
        {
            return '<a href="javascript:void(0)" title="Already friend" value="'+id+'" class=""><i class="fas fa-user-friends"></i></a>';
        }

    </script>

@endsection