@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<div>
    @include('layouts.nav')
</div>

    <main class="main">
        <div class="container mt-5">
            <div class="row g-0 justify-content-center">
                <div class="col-md-7">

   
                    <div class="d-flex justify-content-center col p-1" style="border: 1px solid rgb(58,138,185);">
                        <!-- Start Profile section -->
                        <div>
                            <div>
                                <img class="img-fluid mx-auto d-block rounded-circle" id="rounded-circle" src="{{asset('img/img6.jpg')}}"></div>
                            <div class="d-flex justify-content-center mt-2 p-3">
                                <button class="btn btn-sm rounded-0 border-0 mb-2 rounded-pill me-1" id="btn" type="button">
                                    Follower 20.k
                                </button>
                                <button class="btn btn-sm rounded-0 border-0 mb-2 rounded-pill me-1" id="btn" type="button">
                                    Follow 20 m
                                </button>
                                <a class="btn btn-sm rounded-0 border-0 mb-2 rounded-pill" role="button" id="btn" href="upload.html">
                                    <i class="fas fa-upload"></i>&nbsp;Upload</a>
                                </div>
                            <div class="d-flex justify-content-center">
                                <span class="badge p-2 border border-primary text-primary rounded-pill">
                                {{ Auth::user()->name }}
                                </span>
                            </div>
                        </div>
                        <!-- End Profile section -->
                    </div>
                </div>
            </div>

            <!-- Show Data In Loop -->
            <div class="row g-0 justify-content-center">
                <div class="col-md-7">
                    <div class="d-flex justify-content-center border border-1 p-2" style="margin-top:2em;margin-bottom:2em;">
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua.<br>
                            </p>
                            
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    Item 1
                                </li>
                                <li class="list-inline-item">
                                    Item 2
                                </li>
                                <li class="list-inline-item">
                                    Item 3
                                </li>
                                <li class="list-inline-item">
                                    Item 4
                                </li>
                            </ul>
                            <video class="bg-info" width="100%" height="400" autoplay="">

                            </video>
                            <div class="d-flex border border-1 p-1">
                                <div class="p-1">
                                    <img class="rounded-circle" src="{{asset('img/img6.jpg')}}" width="30" height="30">
                                    <a class="text-decoration-none ms-1" href="#">
                                        John doe
                                    </a>
                                </div>
                                <div class="ms-auto p-1">
                                    <a class="text-uppercase text-decoration-none btn btn-primary rounded-pill" href="#">
                                        <strong>Follow</strong>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Start Pop Up -->
                        <div class="d-flex flex-column">
                            <span class="p-2">
                                <i class="fas fa-heart" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="23.3k"></i>
                            </span>
                            <span class="p-2">
                                <i class="fas fa-comment" data-bs-toggle="modal" data-bss-tooltip="" data-bs-placement="right" title="23.3k" data-bs-target="#commentModal"></i>
                            </span>

                            <!-- Start Post Comment Section -->
                            <div id="commentModal" class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Post Comment
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <!-- Comment loop -->
                                            <ul class="list-unstyled overflow-auto" style="height: 300px;">
                                                <li class="mb-2 list-group-item d-flex justify-content-between align-items-center">
                                                    <span>
                                                        <img class="rounded-circle" src="{{asset('img/img6.jpg')}}" width="50" height="50">
                                                    </span>    
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .
                                                </li>
                                            </ul>
                                            <!-- End Comment loop -->
                                            <form method="post">
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm rounded-0" type="text" name="body" placeholder="Post comment" required="">
                                                    <button class="bg-primary btn btn-sm rounded-0 border border-1" type="submit">
                                                        Post
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Comment Section -->
                            
                            <!-- Start Report Section -->
                            <span class="p-2">
                                <i class="fas fa-flag" data-bs-toggle="modal" data-bs-target="#flagModal"></i>
                            </span>

                            <div id="flagModal" class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Report
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <select class="form-select">
                                                    <optgroup label="This is a group">
                                                        <option value="12" selected="">
                                                            This is item 1
                                                        </option>
                                                        <option value="13">
                                                            This is item 2
                                                        </option>
                                                        <option value="14">
                                                            This is item 3
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Report Section -->



                        <!-- End Pop Up -->
                    </div>
                </div>
            </div>
            <!-- End Show Data In Loop -->
        </div>
    </main>
             

           
@endsection
