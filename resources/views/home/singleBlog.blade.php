@extends('home.layouts.master')
@section('content')

<!--Sidebar Page Container-->
<div class="sidebar-page-container" style="padding-top:0px">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box">
                        <figure class="image wow fadeIn"><img src="{{asset($blog->picture)}}" alt="" style="height: 350px"></figure>
                    </div>

                    <div class="content-box">
                        <div class="title-box">
                            <h2>{{$blog->title}}</h2>
                        </div>
                        <p>{{$blog->details}}</p>
                    </div>
                </div>
               <hr>
                <!-- ======= Comments ======= -->

                <div class="comments">
                    <h5 class="comment-title py-2">{{$comments->count()}} Comments</h5>
                    @foreach($comments as $comment)
                    <div class="comment d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="avatar avatar-sm ">
                                <img class="avatar-img" src="{{ asset('assets/home/images/resource/avatar-1.jpg') }}" style="width: 40px" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                            <div class="ml-2 comment-meta d-flex align-items-baseline">
                                <h6 class="me-2">{{$comment->user_id}}</h6>
                                <span class="text-muted">2d</span>
                            </div>
                            <div class="comment-body ml-2">
                                {{$comment->comment}}
                            </div>
                            <a href="javascript::void(0)" onclick="replay(this)" >Replay</a>
                            <div class="comment-replies bg-light p-3 mt-3 rounded">
                                <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                                <div class="reply d-flex mb-4">
                                    <div class="flex-shrink-0 ">
                                        <div class="avatar avatar-sm ">
                                            <img class="avatar-img" src="{{ asset('assets/home/images/resource/avatar-2.jpg') }}"style="width: 40px" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ms-sm-3 ml-2">
                                        <div class="reply-meta d-flex align-items-baseline">
                                            <h6 class="mb-0 me-2">Brandon Smith</h6>
                                            <span class="text-muted">2d</span>
                                        </div>
                                        <div class="reply-body">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- End Comments -->

                <!-- ======= Comments Form ======= -->
                @if (Auth::check())
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-12">
                        <h5 class="comment-title">Leave a Comment</h5>
                        <form action="{{route('user.comment.store')}}" method="post">@csrf
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="comment-message">Message</label>
                                <textarea class="form-control" name="comment" id="comment-message" placeholder="Enter your name" cols="30" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="Post comment">
                            </div>
                        </div>
                        </form>
                    </div>
                </div><!-- End Comments Form -->
                @else
                    <h5>Plese <a href="{{route('login')}}" class="text-danger">Login</a> first for comments!</h5>
                @endif
                {{-- Replay div  --}}
                <div class="col-lg-12  replyDiv" style="display:none" >
                    <form action="" method="post">@csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <textarea class="form-control" name="comment" id="comment-message" placeholder="Enter your Reply" cols="5" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" value="Reply">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--Sidebar Side-->
       <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">
                    <div class="help-box">
                        <span>Quick Contact</span>
                        <h4>Get Solution</h4>
                        <p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>
                        <a href="{{route('contact')}}" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->
<!-- Clients Section -->
@include('home.layouts.sponsor');

<script type="text/javascript">
        function replay(caller){
                $('.replyDiv').insertAfter($(caller));
                $('.replyDiv').show();
        }
</script>

@endsection
