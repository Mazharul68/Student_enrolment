<div class="wrapper">
    <!-- Sidebar  -->
      <div class="iq-sidebar">
          <div class="iq-sidebar-logo d-flex justify-content-between">
             <a href="{{ url('admin/home') }}">
             <img src="{{ asset('public/admin') }}/images/logo.png" class="img-fluid" alt="">
             <span>Sofbox</span>
             </a>
             <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                   <div class="line-menu half start"></div>
                   <div class="line-menu"></div>
                   <div class="line-menu half end"></div>
                </div>
             </div>
          </div>
          <div id="sidebar-scrollbar">
             <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                   <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                   <li>
                      <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="index.html">Dashboard 1</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="#mailbox" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="app/index.html">Inbox</a></li>
                         <li><a href="app/email-compose.html">Email Compose</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="profile.html">User Profile</a></li>
                         <li><a href="profile-edit.html">User Edit</a></li>
                         <li><a href="add-user.html">User Add</a></li>
                         <li><a href="user-list.html">User List</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="#ecommerce" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>eCommerce</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="product.html">Product</a></li>
                         <li><a href="itemdetails.html">Item Details</a></li>
                         <li><a href="checkout.html">Checkout</a></li>
                      </ul>
                   </li>
                   <li class="iq-menu-title"><i class="ri-separator"></i><span>Pages</span></li>
                   <li>
                      <a href="#authentication" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="sign-in.html">Login</a></li>
                         <li><a href="sign-up.html">Register</a></li>
                         <li><a href="pages-recoverpw.html">Recover Password</a></li>
                         <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                            <li>
                               <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                               <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                  <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                               </ul>
                            </li>
                         </li>
                         <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>

                      </ul>
                   </li>
                </ul>
             </nav>
             <div class="p-3"></div>
          </div>
       </div>
  </div>
