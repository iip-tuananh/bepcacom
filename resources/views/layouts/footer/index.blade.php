<footer class="footer bg-footer">
    <div class="site-footer">
       <div class="container">
          <div class="row">
             <div class="col-md-4 col-md-push-4 col-sm-4 col-sm-push-4">
                <div class="footer-logo-and-info text-center">
                   <a href="{{route('home')}}" class="logo-wrapper" title="{{$setting->company}}">
                   <img src="{{$setting->logo}}" data-src="{{$setting->logo}}" />
                   </a>
                   <ul>
                      <li>Địa chỉ:{{$setting->address1}}</li>
                      <li>Điện thoại: <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">1900 6750</a></li>
                      <li>Email <a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-4 col-md-pull-4 col-sm-4 col-sm-pull-4">
                <div class="footer-widget footer-mailchimp">
                   <h3>Đăng ký nhận tin</h3>
                   <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                   <form action="{{route('postcontact')}}" method="post">
                      <input type="email" class="form-control" value="" aria-label="Email của bạn" placeholder="Email của bạn" name="EMAIL" id="mail" disabled>
                
                   </form>
                   <div class="footer-payment">
                      <img src="{{asset('frontend/images/payment_1.svg')}}" alt="{{$setting->company}}" />
                      <img src="{{asset('frontend/images/payment_2.svg')}}" alt="{{$setting->company}}" />
                      <img src="{{asset('frontend/images/payment_3.svg')}}" alt="{{$setting->company}}" />
                      <img src="{{asset('frontend/images/payment_4.svg')}}" alt="{{$setting->company}}" />
                      <img src="{{asset('frontend/images/payment_5.svg')}}" alt="{{$setting->company}}" />
                   </div>
                </div>
             </div>
             <div class="col-md-4 col-sm-4">
                <div class="footer-widget">
                   <h3>Cam kết của chúng tôi</h3>
                   <ul class="cms-lists-inner">
                      <li>
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 428.16 428.16" style="enable-background:new 0 0 428.16 428.16;" xml:space="preserve" width="20px" height="20px">
                            <path d="M393.8,110.208c-0.512-11.264-0.512-22.016-0.512-32.768c0-8.704-6.656-15.36-15.36-15.36    c-64,0-112.64-18.432-153.088-57.856c-6.144-5.632-15.36-5.632-21.504,0C162.888,43.648,114.248,62.08,50.248,62.08    c-8.704,0-15.36,6.656-15.36,15.36c0,10.752,0,21.504-0.512,32.768c-2.048,107.52-5.12,254.976,174.592,316.928l5.12,1.024    l5.12-1.024C398.408,365.184,395.848,218.24,393.8,110.208z M201.8,259.2c-3.072,2.56-6.656,4.096-10.752,4.096h-0.512    c-4.096,0-8.192-2.048-10.752-5.12l-47.616-52.736l23.04-20.48l37.376,41.472l82.944-78.848l20.992,22.528L201.8,259.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#DDAC55"/>
                         </svg>
                         <span>Bãi giữ xe miễn phí rộng rãi</span>
                      </li>
                      <li>
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 428.16 428.16" style="enable-background:new 0 0 428.16 428.16;" xml:space="preserve" width="20px" height="20px">
                            <path d="M393.8,110.208c-0.512-11.264-0.512-22.016-0.512-32.768c0-8.704-6.656-15.36-15.36-15.36    c-64,0-112.64-18.432-153.088-57.856c-6.144-5.632-15.36-5.632-21.504,0C162.888,43.648,114.248,62.08,50.248,62.08    c-8.704,0-15.36,6.656-15.36,15.36c0,10.752,0,21.504-0.512,32.768c-2.048,107.52-5.12,254.976,174.592,316.928l5.12,1.024    l5.12-1.024C398.408,365.184,395.848,218.24,393.8,110.208z M201.8,259.2c-3.072,2.56-6.656,4.096-10.752,4.096h-0.512    c-4.096,0-8.192-2.048-10.752-5.12l-47.616-52.736l23.04-20.48l37.376,41.472l82.944-78.848l20.992,22.528L201.8,259.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#DDAC55"/>
                         </svg>
                         <span>Nhân viên tư vấn sản phẩm nhiệt tình</span>
                      </li>
                  
                      <li>
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 428.16 428.16" style="enable-background:new 0 0 428.16 428.16;" xml:space="preserve" width="20px" height="20px">
                            <path d="M393.8,110.208c-0.512-11.264-0.512-22.016-0.512-32.768c0-8.704-6.656-15.36-15.36-15.36    c-64,0-112.64-18.432-153.088-57.856c-6.144-5.632-15.36-5.632-21.504,0C162.888,43.648,114.248,62.08,50.248,62.08    c-8.704,0-15.36,6.656-15.36,15.36c0,10.752,0,21.504-0.512,32.768c-2.048,107.52-5.12,254.976,174.592,316.928l5.12,1.024    l5.12-1.024C398.408,365.184,395.848,218.24,393.8,110.208z M201.8,259.2c-3.072,2.56-6.656,4.096-10.752,4.096h-0.512    c-4.096,0-8.192-2.048-10.752-5.12l-47.616-52.736l23.04-20.48l37.376,41.472l82.944-78.848l20.992,22.528L201.8,259.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#DDAC55"/>
                         </svg>
                         <span>Thanh toán tiền mặt hoặc thẻ ATM,...</span>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="copyright clearfix">
       <div class="container">
          <div class="row">
             <div class="col-sm-12 text-center">
                <ul class="footer-social">
                   <li class="facebook">
                      <a href="#" aria-label="Facebook" title="Facebook" target="_blank" rel="nofollow">
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="18px" height="18px">
                            <path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#707070"/>
                         </svg>
                      </a>
                   </li>
                   <li class="twitter">
                      <a href="#" aria-label="Twitter" title="Twitter" target="_blank" rel="nofollow">
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="18px" height="18px">
                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#707070"/>
                         </svg>
                      </a>
                   </li>
                   <li class="instagram">
                      <a href="#" aria-label="Instagram" title="Instagram" target="_blank" rel="nofollow">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00096 512.00096" width="18px" height="18px" class="hovered-paths">
                            <path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#707070"/>
                            <path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#707070"/>
                            <path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#707070"/>
                         </svg>
                      </a>
                   </li>
                   <li class="youtube">
                      <a href="#" aria-label="Youtube" title="Youtube" target="_blank" rel="nofollow">
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="18px" height="18px">
                            <path d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80    c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904    C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728    c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816    c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096    C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#707070"/>
                         </svg>
                      </a>
                   </li>
                </ul>
                <span>© Bản quyền thuộc về <b>Evo Themes</b> <span class="s480-f">|</span> Cung cấp bởi <a href="https://www.sapo.vn/?utm_campaign=cpn:site_khach_hang-plm:footer&amp;utm_source=site_khach_hang&amp;utm_medium=referral&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=site_khach_hang" title="Sapo" target="_blank" rel="nofollow">Sapo</a></span>
             </div>
          </div>
          <div class="back-to-top" title="Lên đầu trang">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;" xml:space="preserve">
                <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285   C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854   c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848   c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566   C284.929,199.378,283.984,197.188,282.082,195.285z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
             </svg>
          </div>
       </div>
    </div>
 </footer>