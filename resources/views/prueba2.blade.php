@extends('layouts.admin')
@section('title','Gestión de categorías')
@section('styles')

@endsection
@section('create')
    <li class="nav-item d-none d-lg-flex">
        <a class="nav-link" href="{{route('categories.create')}}">
            <span class="btn btn-primary">Crear nuevo</span>
        </a>
    </li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
    <!-- partial:../../partials/_settings-panel.html -->
    <!-- partial:../../partials/_sidebar.html -->
    <!-- partial -->
    {{-- <div class="main-panel"> --}}
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            Profile
          </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Sample Pages</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="border-bottom text-center pb-4">
                      <img src="../../images/faces/face12.jpg" alt="profile" class="img-lg rounded-circle mb-3"/>
                      <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-success">Hire Me</button>
                        <button class="btn btn-success">Follow</button>
                      </div>
                    </div>
                    <div class="border-bottom py-4">
                      <p>Skills</p>
                      <div>
                        <label class="badge badge-outline-dark">Chalk</label>
                        <label class="badge badge-outline-dark">Hand lettering</label>
                        <label class="badge badge-outline-dark">Information Design</label>
                        <label class="badge badge-outline-dark">Graphic Design</label>
                        <label class="badge badge-outline-dark">Web Design</label>  
                      </div>                                                               
                    </div>
                    <div class="border-bottom py-4">
                      <div class="d-flex mb-3">
                        <div class="progress progress-md flex-grow">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="progress progress-md flex-grow">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Status
                        </span>
                        <span class="float-right text-muted">
                          Active
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          006 3435 22
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          Jacod@testmail.com
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Facebook
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">David Grey</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Twitter
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">@davidgrey</a>
                        </span>
                      </p>
                    </div>
                    <button class="btn btn-primary btn-block">Preview</button>
                  </div>
                  <div class="col-lg-8 pl-lg-5">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3>David Grey. H</h3>
                        <div class="d-flex align-items-center">
                          <h5 class="mb-0 mr-2 text-muted">Canada</h5>
                          <select id="profile-rating" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-outline-secondary btn-icon">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-primary">Request</button>
                      </div>
                    </div>
                    <div class="mt-4 py-2 border-top border-bottom">
                      <ul class="nav profile-navbar">
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <i class="fa fa-user"></i>
                            Info
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">
                            <i class="fas fa-file"></i>
                            Feed
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <i class="fa fa-calendar"></i>
                            Agenda
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">
                            <i class="far fa-file-word"></i>
                            Resume
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="profile-feed">
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="../../images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle"/>
                        <div class="ml-4">
                          <h6>
                            Mason Beck
                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                          </h6>
                          <p>
                            There is no better advertisement campaign that is low cost and also successful at the same time.
                          </p>
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-star mr-1"></i>4
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-comment mr-1"></i>11
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-mail-reply"></i>
                            </span>
                          </p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="../../images/faces/face16.jpg" alt="profile" class="img-sm rounded-circle"/>
                        <div class="ml-4">
                          <h6>
                            Willie Stanley
                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                          </h6>
                          <img src="../../images/samples/1280x768/12.jpg" alt="sample" class="rounded mw-100"/>                            
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-star mr-1"></i>4
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-comment mr-1"></i>11
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-mail-reply"></i>
                            </span>
                          </p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="../../images/faces/face19.html" alt="profile" class="img-sm rounded-circle"/>
                        <div class="ml-4">
                          <h6>
                            Dylan Silva
                            <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                          </h6>
                          <p>
                            When I first got into the online advertising business, I was looking for the magical combination 
                            that would put my website into the top search engine rankings
                          </p>
                          <img src="../../images/samples/1280x768/5.jpg" alt="sample" class="rounded mw-100"/>                                                        
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-star mr-1"></i>4
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-comment mr-1"></i>11
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-mail-reply"></i>
                            </span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      {{-- <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
        </div>
      </footer>
      <!-- partial -->
    </div> --}}
    <!-- main-panel ends -->

@endsection
@section('scripts')

@endsection