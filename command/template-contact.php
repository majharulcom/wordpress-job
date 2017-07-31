<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package command
 Template Name: Contact Page
 */

get_header(); ?>

    <div class="p_track_bkgnd">
        <div class="container">
            <div class="p_track_area">
                <div class="row">

                    <div class="col-md-7">
                        <div class="contact_formdiv">
                            <h3 class="info_phone">Contact Us</h3>
                            <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact_page_info">
                            <h3 class="info_phone">Phone</h3>
                            <p><b>Australia:</b> 1300 124 2310</p>
                            <p><b>United States:</b> 1300 452 2960</p>
                            <p><b>New Zeeland:</b> 1236 569 5655</p>
                            <p><b>United Kingdom:</b> 4522 3221 6332</p>
                            <h3 class="info_phone">Contact Info</h3>
                            <p><b>Email:</b> support@commandcenter.io</p>
                            <p><b>Address:</b> <span class="add_paras">Melbourne Vani, Streret 26, Australia 120</span></p>
                            <ul class="head_social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p_track_bkgnd p_access_bkgnd">
        <div class="container">
            <div class="p_track_area p_track_area_subs_f">
                <div class="row">
                    <h2 class="front_subs_a_title">Try Us Free For 30 Days</h2>
                    <form class="navbar-form navbar-left form_con form_subs_free">
                        <div class="form-group">
                            <input type="text" class="form-control input_cn" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-default input_get">Get Started</button>
                    </form>
                    <ul class="front_warn">
                        <li> Easy setup <i class="fa fa-circle blue_circle" aria-hidden="true"></i></li>
                        <li>Try any product free for 30 days <i class="fa fa-circle blue_circle" aria-hidden="true"></i></li>
                        <li>Cancel at any time</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php

get_footer();