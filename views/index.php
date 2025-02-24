<?php
/*
 *   Crafted On Mon Feb 24 2025
 *   From his finger tips, through his IDE to your deployment environment at full throttle with no bugs, loss of data,
 *   fluctuations, signal interference, or doubt—it can only be
 *   the legendary coding wizard, Martin Mbithi (martin@devlan.co.ke, www.martmbithi.github.io)
 *   
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD Super Duper User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. LICENSE TO BE AWESOME
 *   Congrats, you lucky human! Devlan Solutions LTD hereby bestows upon you the magical,
 *   revocable, personal, non-exclusive, and totally non-transferable right to install this epic system
 *   on not one, but TWO separate computers for your personal, non-commercial shenanigans.
 *   Unless, of course, you've leveled up with a commercial license from Devlan Solutions LTD.
 *   Sharing this software with others or letting them even peek at it? Nope, that's a big no-no.
 *   And don't even think about putting this on a network or letting a crowd join the fun unless you
 *   first scored a multi-user license from us. Sharing is caring, but rules are rules!
 *
 *   2. COPYRIGHT POWER-UP
 *   This Software is the prized possession of Devlan Solutions LTD and is shielded by copyright law
 *   and the forces of international copyright treaties. You better not try to hide or mess with
 *   any of our awesome proprietary notices, labels, or marks. Respect the swag!
 *
 *
 *   3. RESTRICTIONS, NO CHEAT CODES ALLOWED
 *   You may not, and you shall not let anyone else:
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or do any sneaky stuff to
 *   figure out the source code of this software;
 *   (b) modify, remix, distribute, or create your own funky version of this masterpiece;
 *   (c) copy (except for that one precious backup), distribute, show off in public, transmit, sell, rent,
 *   lease, or otherwise exploit the Software like it's your own.
 *
 *
 *   4. THE ENDGAME
 *   This License lasts until one of us says 'Game Over'. You can call it quits anytime by
 *   destroying the Software and all the copies you made (no hiding them under your bed).
 *   If you break any of these sacred rules, this License self-destructs, and you must obliterate
 *   every copy of the Software, no questions asked.
 *
 *
 *   5. NO GUARANTEES, JUST PIXELS
 *   DEVLAN SOLUTIONS LTD doesn’t guarantee this Software is flawless—it might have a few
 *   quirks, but who doesn’t? DEVLAN SOLUTIONS LTD washes its hands of any other warranties,
 *   implied or otherwise. That means no promises of perfect performance, marketability, or
 *   non-infringement. Some places have different rules, so you might have extra rights, but don’t
 *   count on us for backup if things go sideways. Use at your own risk, brave adventurer!
 *
 *
 *   6. SEVERABILITY—KEEP THE GOOD STUFF
 *   If any part of this License gets tossed out by a judge, don’t worry—the rest of the agreement
 *   still stands like a boss. Just because one piece fails doesn’t mean the whole thing crumbles.
 *
 *
 *   7. NO DAMAGE, NO DRAMA
 *   Under no circumstances will Devlan Solutions LTD or its squad be held responsible for any wild,
 *   indirect, or accidental chaos that might come from using this software—even if we warned you!
 *   And if you ever think you’ve got a claim, the most you’re getting out of us is the license fee you
 *   paid—if any. No drama, no big payouts, just pixels and code.
 *
 */

session_start();
require_once('../config/config.php');
require_once('../partials/backoffice_head.php');
?>

<body class="nk-body npc-subscription has-aside ui-clean ">
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-md m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <img class="logo-dark logo-img logo-img-lg" src="../public/images/logo.png" srcset="../public/images/logo.png 2x" alt="logo-dark">
                                <h2 class="nk-block-title fw-normal"><br><?php echo $greeting; ?>!</h2>
                                    <div class="nk-block-des">
                                        <h5 class="">
                                            Welcome to our Feedback Portal! <br>
                                            We're delighted to have you here. To begin, simply select a feedback type and follow the steps to share your thoughts.
                                        </h5>
                                    </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-6">
                                        <div class="card card-bordered card-full">
                                            <div class="nk-wg1">
                                                <div class="nk-wg1-block">
                                                    <div class="nk-wg1-img">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                            <path d="M62.92,87H10.08A4.08,4.08,0,0,1,6,82.92V7.08A4.08,4.08,0,0,1,10.08,3H47.82L67,21.23V82.92A4.08,4.08,0,0,1,62.92,87ZM47,3V16.92A4,4,0,0,0,50.88,21H66" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
                                                            <line x1="14" y1="14" x2="28" y2="14" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="19" x2="36" y2="19" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="37" x2="28" y2="37" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="42" x2="45" y2="42" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="49" x2="40" y2="49" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="56" x2="32" y2="56" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="63" x2="38" y2="63" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <line x1="14" y1="70" x2="30" y2="70" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <path d="M67,40h9a9.59,9.59,0,0,0,8,8.32s.89,19-17,27.68C49.12,67.28,50,48.32,50,48.32A9.59,9.59,0,0,0,58,40Z" fill="#6576ff" />
                                                            <path d="M67,72.51C52.12,65.35,52.86,49.82,52.86,49.82A7.94,7.94,0,0,0,59.52,43H67Z" fill="#fff" />
                                                            <path d="M62,61.77a11.05,11.05,0,0,1,12,0V65H62Z" fill="#fff" />
                                                            <circle cx="68.5" cy="54.5" r="3.5" fill="#fff" />
                                                            <path d="M68.47,58.13a4,4,0,1,1,4-4,4,4,0,0,1-4,4Zm0-6.92a3,3,0,1,0,3,3,3,3,0,0,0-3-3Zm0,0" fill="#6576ff" />
                                                            <path d="M74.5,66h-13a.51.51,0,0,1-.5-.5V62.1a1.46,1.46,0,0,1,.69-1.25,12.32,12.32,0,0,1,12.66,0A1.46,1.46,0,0,1,75,62.1v3.41a.49.49,0,0,1-.5.49ZM62,65H74V62.09a.47.47,0,0,0-.22-.41,11.28,11.28,0,0,0-11.56,0,.47.47,0,0,0-.22.41Zm.53,0" fill="#6576ff" />
                                                        </svg>
                                                    </div>
                                                    <div class="nk-wg1-text">
                                                        <h5 class="title">Complaint </h5>
                                                        <p>
                                                            This module provides a platform for individuals to raise concerns, report grievances, and seek resolutions regarding services or issues affecting them.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="nk-wg1-action">
                                                    <a href="complaint" class="link"><span>Submit Complaint</span> <em class="icon ni ni-chevron-right"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->


                                    <div class="col-md-6">
                                        <div class="card card-bordered card-full">
                                            <div class="nk-wg1">
                                                <div class="nk-wg1-block">
                                                    <div class="nk-wg1-img">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                            <circle cx="82.03" cy="26.32" r="2.97" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" />
                                                            <circle cx="79.41" cy="68.42" r="2.87" fill="#e3e7fe" />
                                                            <circle cx="14.98" cy="82.08" r="1.72" fill="#e3e7fe" />
                                                            <rect x="5" y="34.77" width="6.88" height="2.29" fill="#e3e7fe" />
                                                            <rect x="5" y="34.77" width="6.88" height="2.29" transform="translate(44.36 27.47) rotate(90)" fill="#e3e7fe" />
                                                            <polygon points="39.21 4.22 42.89 5.55 45.92 3.33 45.97 7.18 49.17 9.48 45.52 10.53 44.47 14.18 42.16 10.98 38.31 10.94 40.54 7.91 39.21 4.22" fill="#6576ff" />
                                                            <polygon points="29.41 10.28 31.41 11 33.06 9.79 33.08 11.88 34.82 13.14 32.84 13.71 32.27 15.69 31.02 13.95 28.92 13.93 30.13 12.28 29.41 10.28" fill="#b3c2ff" />
                                                            <polygon points="51.56 9.67 53.89 10.52 55.81 9.11 55.84 11.54 57.87 13 55.56 13.67 54.89 15.98 53.44 13.95 51 13.92 52.41 12 51.56 9.67" fill="#b3c2ff" />
                                                            <path d="M49.89,64.32a.77.77,0,0,0-1-.78,21.57,21.57,0,0,1-4.44.67A21.73,21.73,0,0,1,40,63.54a.77.77,0,0,0-1,.78v3a1,1,0,0,0,1,1h8.81a1,1,0,0,0,1-1Zm.46-.17" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <path d="M58.43,20.88H30.92A2.08,2.08,0,0,0,28.84,23V40.1a21.46,21.46,0,0,0,4.51,13.75,14.46,14.46,0,0,0,22.65,0A21.46,21.46,0,0,0,60.51,40.1V23A2.08,2.08,0,0,0,58.43,20.88Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <path d="M24.15,44.87c-2.71-1-4-3.51-4-7.59V27.8h4V23.85H18.31a2.07,2.07,0,0,0-2.07,2.07V37.28c0,6.93,3.16,11.15,9,12.14a26.26,26.26,0,0,1-1.06-4.55Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <path d="M28.5,72.92v2.16c0,.23.94.42,2.1.42H58.4c1.16,0,2.1-.19,2.1-.42V72.92c0-.23-.94-.42-2.1-.42H30.6C29.44,72.5,28.5,72.69,28.5,72.92Zm2.85.12" fill="#6576ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M28.5,78.92v2.16c0,.23.94.42,2.1.42H58.4c1.16,0,2.1-.19,2.1-.42V78.92c0-.23-.94-.42-2.1-.42H30.6C29.44,78.5,28.5,78.69,28.5,78.92Zm2.85.12" fill="#6576ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M71.64,23.85H65.71V27.8h4v8.84c0,3.89-1.24,6.22-4,7.23a24,24,0,0,1-1.06,4.33c5.81-.94,9-5,9-11.56V25.82a2,2,0,0,0-2-2Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                            <path d="M50.56,33.64v9a1.45,1.45,0,0,1-.72,1.26L45.4,46.48a1.45,1.45,0,0,1-1.45,0l-4.43-2.56a1.44,1.44,0,0,1-.73-1.26V37.54a1.44,1.44,0,0,1,.73-1.26L44,33.72a1.43,1.43,0,0,1,1.32-.07v1.52l0,0a1.14,1.14,0,0,0-1.13,0l-3.44,2a1.11,1.11,0,0,0-.56,1v4a1.12,1.12,0,0,0,.56,1l3.44,2a1.14,1.14,0,0,0,1.13,0l3.44-2a1.12,1.12,0,0,0,.56-1v-9.2Z" fill="#6576ff" />
                                                            <path d="M47.92,32.11l-1.33-.76v1.53h0v8a.49.49,0,0,1-.24.42l-1.43.83a.51.51,0,0,1-.48,0L43,41.35a.49.49,0,0,1-.24-.42V39.27a.49.49,0,0,1,.24-.42L44.44,38a.46.46,0,0,1,.48,0l.35.21V36.7l-.19-.11a.79.79,0,0,0-.81,0L41.84,38a.82.82,0,0,0-.41.7V41.5a.81.81,0,0,0,.41.7l2.43,1.41a.83.83,0,0,0,.81,0l2.43-1.41a.81.81,0,0,0,.41-.7V33.64h0Z" fill="#6576ff" />
                                                            <path d="M51.89,34.41v8.82a1.78,1.78,0,0,1-.9,1.55l-5.42,3.13a1.79,1.79,0,0,1-1.79,0l-5.42-3.13a1.78,1.78,0,0,1-.9-1.55V37a1.78,1.78,0,0,1,.9-1.55l5.42-3.13a1.79,1.79,0,0,1,1.79,0l1,.59V31.35l-.86-.5a2.1,2.1,0,0,0-2.11,0L37.2,34.56a2.11,2.11,0,0,0-1.06,1.83v7.42a2.11,2.11,0,0,0,1.06,1.83l6.42,3.7a2.1,2.1,0,0,0,2.11,0l6.42-3.7a2.11,2.11,0,0,0,1.06-1.83V35.19Z" fill="#6576ff" />
                                                        </svg>
                                                    </div>
                                                    <div class="nk-wg1-text">
                                                        <h5 class="title">Compliment</h5>
                                                        <p>
                                                            This module provides a platform for individuals to express appreciation for the services we offer. Whether it's recognizing excellent customer service, efficiency, or impactful initiatives, it fosters a culture of gratitude and encouragement, motivating continued excellence.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="nk-wg1-action">
                                                    <a href="compliment" class="link"><span>Give compliment</span> <em class="icon ni ni-chevron-right"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php require_once('../partials/backoffice_scripts.php'); ?>
</body>


</html>