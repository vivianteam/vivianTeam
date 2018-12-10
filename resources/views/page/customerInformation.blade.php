@extends('masterPayMent')
@section('content')
      <a href="#main-header" class="skip-to-content">
        Skip to content
      </a>
      <div class="banner" data-header>
        <div class="wrap">
          <a class="logo logo--left" href="https://vivianShop.myshopify.com">
            <span class="logo__text heading-1">
              VivianShop
            </span>
          </a>
          <h1 class="visually-hidden">
            Customer information
          </h1>
        </div>
      </div>
      <button class="order-summary-toggle order-summary-toggle--show shown-if-js" data-trekkie-id="order_summary_toggle" aria-expanded="false" aria-controls="order-summary" data-drawer-toggle="[data-order-summary]">
        <span class="wrap">
          <span class="order-summary-toggle__inner">
            <span class="order-summary-toggle__icon-wrapper">
              <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__icon">
                <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" />
              </svg>
            </span>
            <span class="order-summary-toggle__text order-summary-toggle__text--show">
              <span>Show order summary
              </span>
              <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000">
                <path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z" />
              </svg>
            </span>
            <span class="order-summary-toggle__text order-summary-toggle__text--hide">
              <span>Hide order summary
              </span>
              <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000">
                <path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z" />
              </svg>
            </span>
            <span class="order-summary-toggle__total-recap total-recap" data-order-summary-section="toggle-total-recap">
              <span class="total-recap__final-price" data-checkout-payment-due-target="6500">$65.00
              </span>
            </span>
          </span>
        </span>
      </button>
      <div class="content" data-content>
        <div class="wrap">
          <div class="main" role="main">
            <div class="main__header">
              <a class="logo logo--left" href="https://vivianShop.myshopify.com">
                <span class="logo__text heading-1">
                  VivianShop
                </span>
              </a>
              <h1 class="visually-hidden">
                Customer information
              </h1>
              <ul class="breadcrumb ">
                <li class="breadcrumb__item breadcrumb__item--completed">
                  <a class="breadcrumb__link" data-trekkie-id="breadcrumb_cart_link" href="{{route('cart')}}">Cart
                  </a>
                  <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> 
                    <use xlink:href="#chevron-right" /> 
                  </svg>
                </li>
              
                <li class="breadcrumb__item breadcrumb__item--blank">
                  <a class="breadcrumb__link" data-trekkie-id="breadcrumb_payment_method_link" href="{{route('getPaymentMethod')}}">Payment method
                  </a>
                </li>
              </ul>
              <div data-alternative-payments>
              </div>
            </div>
            <div class="main__content">
            @if(Auth::check())
              <div class="step" data-step="contact_information">
                <form class="edit_checkout" novalidate="novalidate" data-customer-information-form="true" data-email-or-phone="false" action="{{route('orders')}}" accept-charset="UTF-8" method="post">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="step__sections">
                    <div class="section section--contact-information">
                      <div class="section__header">
                        <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                          <h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">
                            Contact information
                          </h2>
                          <p class="layout-flex__item">
                            <span aria-hidden="true">Already have an account?
                            </span>
                            <a data-trekkie-id="have_an_account_login_link" href="#">
                              <span class="visually-hidden">Already have an account?
                              </span>
                              Log in
                            </a>
                          </p>
                        </div>
                      </div>

                      <div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
                        <div class="fieldset">
                          <div class="field field--required">
                            <label class="field__label" for="checkout_email">Email
                            </label>
                            <div class="field__input-wrapper">
                              <input disabled placeholder="Email" autocapitalize="off" spellcheck="false" autocomplete="shipping email" data-trekkie-id="email_field" data-autofocus="true" data-backup="customer_email" aria-describedby="checkout-context-step-one" aria-required="true" class="field__input" size="30" type="email" value="{{Auth::user()->email}}" name="email" id="checkout_email" />
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                  <div class="section section--shipping-address" data-shipping-address
                         data-update-order-summary>
                      <div class="section__header">
                        <h2 class="section__title">
                          Shipping address
                        </h2>
                      </div>
                      <div class="section__content">
                        <div class="fieldset" data-address-fields>
                          <input disabled class="visually-hidden" autocomplete="shipping given-name" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="first_name" data-honeypot="true" size="30" type="text" name="checkout[shipping_address][first_name]" />
                          <input class="visually-hidden" autocomplete="shipping family-name" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="last_name" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][last_name]" />
                          <input class="visually-hidden" autocomplete="shipping address-line1" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="address1" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][address1]" />
                          <input class="visually-hidden" autocomplete="shipping address-line2" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="address2" data-honeypot="true" size="30" type="text" name="checkout[shipping_address][address2]" />
                          <input class="visually-hidden" autocomplete="shipping address-level2" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="city" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][city]" />
                          <input class="visually-hidden" autocomplete="shipping country" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="country" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][country]" />
                          <input class="visually-hidden" autocomplete="shipping address-level1" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="province" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][province]" />
                          <input class="visually-hidden" autocomplete="shipping postal-code" tabindex="-1" aria-hidden="true" aria-label="no-label" data-autocomplete-field="zip" data-honeypot="true" aria-required="true" size="30" type="text" name="checkout[shipping_address][zip]" />
                          <div class="field--half field field--optional" data-address-field="first_name">
                            <label class="field__label" for="checkout_shipping_address_first_name">Full name
                            </label>
                            <div class="field__input-wrapper">
                              <input disabled placeholder="Full name" autocomplete="shipping given-name" data-trekkie-id="shipping_firstname_field" data-backup="first_name" class="field__input" size="50" type="text" value="{{Auth::user()->username}}" name="fullName" id="checkout_shipping_address_first_name"/>
                            </div>
                          </div>
                          
                          <div class="field--half field field--optional" data-address-field="first_name">
                            <label class="field__label" for="checkout_shipping_address_first_name">Gender
                            </label>
                            <div class="field__input-wrapper">
                              <input disabled placeholder="Gender" autocomplete="shipping given-name" data-trekkie-id="shipping_firstname_field" data-backup="first_name" class="field__input" size="30" type="text" value="{{Auth::user()->gender}}" name="gender" id="checkout_shipping_address_first_name" />
                            </div>
                          </div>
                        <div class="field--third field field--required" data-address-field="zip" data-google-places="true">
                            <label class="field__label" for="checkout_shipping_address_zip">Phone Numbers
                            </label>
                            <div class="field__input-wrapper">
                              <input disabled placeholder="Phone numbers" autocomplete="shipping postal-code" data-backup="zip" data-trekkie-id="shipping_zip_google_autocomplete_field" data-google-autocomplete="true" data-google-autocomplete-title="Suggestions" data-google-autocomplete-single-item="1 item available" data-google-autocomplete-multi-item="" data-google-autocomplete-item-selection="" class="field__input field__input--zip" aria-required="true" size="30" type="text" value="{{Auth::user()->phone}}" name="phone" id="checkout_shipping_address_zip" />
                            </div>
                          </div>
                          <div data-address-field="address1" data-google-places="true" class="field field--required">
                            <label class="field__label" for="checkout_shipping_address_address1">Address
                            </label>
                            <div class="field__input-wrapper">
                              <input disabled placeholder="Address" autocomplete="shipping address-line1" autocorrect="off" role="combobox" aria-autocomplete="list" aria-owns="address-autocomplete" aria-expanded="false" aria-required="true" data-backup="address1" data-trekkie-id="shipping_address1_google_autocomplete_field" data-google-autocomplete="true" data-google-autocomplete-title="Suggestions" data-google-autocomplete-single-item="1 item available" data-google-autocomplete-multi-item="" data-google-autocomplete-item-selection="" class="field__input" size="50" type="text" value="{{Auth::user()->address}}" name="address" id="checkout_shipping_address_address1" />
                            </div>
                          </div>
                        </div> 
                      </div> 
                    </div> 
                    <div class="section section--half-spacing-top section--optional">
                      <div class="section__content">
                        <div class="checkbox-wrapper">
                          <div class="checkbox__input">
                            <input size="30" type="hidden" value="false" name="checkout[remember_me]" />
                            <input name="checkout[remember_me]" type="hidden" value="0" />
                            <input class="input-checkbox" data-backup="remember_me" data-trekkie-id="remember_me_field" type="checkbox" value="1" name="checkout[remember_me]" id="checkout_remember_me" />
                          </div>
                          <label class="checkbox__label" for="checkout_remember_me">
                            Save this information for next time
                          </label>          
                        </div>
                      </div>
                    </div>
                  </div>
             
                  <div class="section section--shipping-method">
                        <div class="section__header">
                          <h2 class="section__title" id="main-header" tabindex="-1">
                            Shipping method
                          </h2>
                        </div>
                        <div class="section__content">
                          <div class="content-box" data-shipping-methods>
                            <div class="content-box__row">
                              <div class="radio-wrapper" data-shipping-method="shopify-International%20Shipping-20.00">
                                <div class="radio__input">
                                  <input class="input-radio" data-checkout-total-shipping="$20.00" data-checkout-total-shipping-cents="2000" data-checkout-shipping-rate="$20.00" data-checkout-original-shipping-rate="$20.00" data-checkout-total-taxes="$0.00" data-checkout-total-taxes-cents="0" data-checkout-total-price="$65.00" data-checkout-total-price-cents="6500" data-checkout-payment-due="$65.00" data-checkout-payment-due-cents="6500" data-checkout-payment-subform="required" data-checkout-subtotal-price="$45.00" data-checkout-subtotal-price-cents="4500" data-backup="shopify-International%20Shipping-20.00" aria-label="International Shipping. $20.00" type="radio" value="shopify-International%20Shipping-20.00" checked="checked" name="checkout[shipping_rate][id]" id="checkout_shipping_rate_id_shopify-international20shipping-2000" />
                                </div>
                                <label class="radio__label" aria-hidden="true" for="checkout_shipping_rate_id_shopify-international20shipping-2000">
                                  <span class="radio__label__primary" data-shipping-method-label-title="International Shipping">
                                    International Shipping
                                  </span>
                                  <span class="radio__label__accessory">
                                    <span class="content-box__emphasis">
                                      $20.00
                                    </span>
                                  </span>
                                </label>      
                              </div> 
                              <!-- /radio-wrapper-->
                            </div>
                          </div>
                        </div> 
                      </div>
                      <div class="section section--payment-method" data-payment-method>
                        <div class="section__header">
                          <h2 class="section__title" id="main-header" tabindex="-1">
                            Payment method
                          </h2>
                          <p class="section__text">
                            All transactions are secure and encrypted.
                          </p>
                        </div>
                        <div class="section__content">
                          <fieldset class="content-box">
                            <div class="radio-wrapper content-box__row" data-same-billing-address>
                              <div class="radio__input">
                                <input class="input-radio" data-backup="different_billing_address_false" data-trekkie-id="same_billing_address_field" type="Offline" value="false" checked="checked" name="payment" id="checkout_different_billing_address_false" />
                              </div>
                              <label class="radio__label content-box__emphasis" for="checkout_different_billing_address_false">
                                Cash on Delivery (COD)
                              </label>
                            </div>
                            <div class="radio-wrapper content-box__row" data-different-billing-address>
                              <div class="radio__input">
                                <input class="input-radio" data-backup="different_billing_address_true" data-trekkie-id="different_billing_address_field" aria-expanded="true" aria-controls="section--billing-address__different" type="radio" value="Online" name="payment" id="checkout_different_billing_address_true"                                </div>
                             
                              <a href="{{route('postPayment')}}"><img src="{{asset('image/')}}/img/thanhtoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a>
                          </fieldset>
                        </div> 
                      </div>
                  <div class="step__footer" data-step-footer>
                    <button name="button" type="submit" class="step__footer__continue-btn btn "  aria-busy="false">
                      <span class="btn__content">
                        Complete order
                      </span>
                      <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false"> 
                        <use xlink:href="#spinner-button" /> 
                      </svg>
                    </button>
               
                    <a class="step__footer__previous-link" data-trekkie-id="previous_step_link" href="{{route('index')}}">
                      <svg focusable="false" aria-hidden="true" class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                        <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"/>
                      </svg>
                      <span class="step__footer__previous-link-content">Return to cart
                      </span>
                    </a>
                  </div>
                </form>
              </div>

          
              <span class="visually-hidden" id="forwarding-external-new-window-message">
                Opens external website in a new window.
              </span>
              <span class="visually-hidden" id="forwarding-new-window-message">
                Opens in a new window.
              </span>
              <span class="visually-hidden" id="forwarding-external-message">
                Opens external website.
              </span>
              <span class="visually-hidden" id="checkout-context-step-one">
                Customer information - vivianShop - Checkout
              </span>
            </div>
            <div class="main__footer">
              <div role="contentinfo" aria-label="Footer">
                <p class="copyright-text">
                  All rights reserved vivianShop
                </p>
              </div>
            </div>
          </div>
          <div class="sidebar" role="complementary">
            <div class="sidebar__header">
              <a class="logo logo--left" href="https://vivianShop.myshopify.com">
                <span class="logo__text heading-1">
                  vivianShop
                </span>
              </a>
              <h1 class="visually-hidden">
                Customer information
              </h1>
            </div>
            
            @include('page/sidebar__content')
          </div>
              @else
               <div class="container">        
                <!-- title -->
                <div class="title-box">
                  <h1 class="text-center text-uppercase title-under">You have not logged in or no account !!!
                  </h1>
                  <br/>
                  <br/>
                </div>
                </div>
                <!-- /title -->   
                <div class="text-center"> 
                  <img src="{{asset('image/')}}/img/error.png" alt="empty cart icon" class="img-responsive-inline" />
                  <div class="divider divider--lg">
                  </div>
                  <br/>
                  <br/>
                  <h4 class="color">You need to login or register here
                  </h4>
                  <div class="divider divider--lg">
                  </div>
                  <br/>
                  <br/>
                  <a class="btn btn--ys" href="{{route('loginPage')}}">
                    <span class="icon icon-keyboard_arrow_left">
                    </span>CONTINUE SHOPPING
                  </a>              
                </div>          
              </div>
              @endif
        </div>
      </div>
@endsession