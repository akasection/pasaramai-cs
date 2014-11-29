<li>
								<!-- start message --> 
								<a href="@yield('notificationURL')">
									<div class="pull-left">
										<img src="@yield('notificationAvatar')" class="img-circle" alt="User Image" />
									</div>
									<h4>
										{{$notificationUsername}} <small><i class="fa fa-clock-o"></i> {{$notificationTime}}</small>
									</h4>
									<p>{{$notificationText}}</p>
								</a>
								<!-- end message -->
							</li>