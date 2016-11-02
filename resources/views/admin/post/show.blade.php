
@extends('adminLayout')


@section('adminPageContent')

<!--<h1> Categories </h1>-->
<form method="POST" action="/admin/post/add">
    
    <input  type="submit" name="add" value="Add New Post" class="btn btn-primary" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
    <!----------------------------------- POST---------------------------------------->
    
    @foreach($posts as $post)
    
    <div class="container">
        

					<div class="row pt-sm">
						<div class="col-md-12">
							<div class="blog-posts single-post mt-xl">

								<article class="post post-large blog-single-post">

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h1 class="mb-md">{{$post->title}}</h1>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> By <a href="#">{{$post->author}} ,</a> </span>
											<span><i class="fa fa-tag"></i>  <a href="#">{{$post->category_name}} ,</a> </span>
											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>

										<img src="img/demos/construction/blog/blog-construction-1.jpg" class="img-responsive pull-right mb-md mb-xs ml-xl" alt="" style="width: 360px;">

                                                                                
                                                                                <p>
                                                                                    {{$post->body}}
                                                                                </p>
                                                                                <div class="pt-sm pb-xs">
											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->
										</div>

										<div class="post-block post-author mt-xl clearfix">
											<h4 class="mt-xl mb-md">Author</h4>
											<div class="img-thumbnail">
												<a href="blog-post.html">
													<img src="img/team/team-22.jpg" alt="">
												</a>
											</div>
											<p><strong class="name mb-md">{{$post->author}}</strong></p>
											<!--<p class="mt-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>-->
										</div>

                                                                                
    <!----------------------------------------------------------------------------Comments---------------------------------------------------------------------------------------------------->                                                                            
<!--										<div class="post-block post-comments clearfix">
											<h4 class="mt-xl mb-md">Comments</h4>

											<ul class="comments">
												<li>
													<div class="comment">
														<div class="img-thumbnail">
															<img class="avatar" alt="" src="img/team/team-23.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
															<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
														</div>
													</div>

													<ul class="comments reply">
														<li>
															<div class="comment">
																<div class="img-thumbnail">
																	<img class="avatar" alt="" src="img/team/team-24.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="pull-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
																</div>
															</div>
														</li>
														<li>
															<div class="comment">
																<div class="img-thumbnail">
																	<img class="avatar" alt="" src="img/team/team-25.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="pull-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																	<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail">
															<img class="avatar" alt="" src="img/team/team-22.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail">
															<img class="avatar" alt="" src="img/team/team-22.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="pull-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
															<span class="date pull-right">November 12, 2016 at 1:38 pm</span>
														</div>
													</div>
												</li>
											</ul>

										</div>-->
    
        <!----------------------------------------------------------------------------/Comments---------------------------------------------------------------------------------------------------->                                                                            


        
        
        <!----------------------------------------------------------------------------Leave Comment ------------------>
        
        
<!--										<div class="post-block post-leave-comment mb-xl">
											<h4 class="mt-xl mb-md">Leave a Comment</h4>

											<form action="" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Your name *</label>
															<input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
														</div>
														<div class="col-md-6">
															<label>Your email address *</label>
															<input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Comment *</label>
															<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
        -->
        
                <!----------------------------------------------------------------------------/Leave Comment ------------------>


									</div>
								</article>

							</div>
						</div>
					</div>

				</div>
    
    @endforeach
        <!-----------------------------------/POST---------------------------------------->

    
</form>




@stop

