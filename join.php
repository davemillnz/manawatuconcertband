<?php
// Join Us page for Manawatu Concert Band
// Pure PHP solution - no external HTML files needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - Manawatu Concert Band</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="old/manawatuconcertband.org.nz/manawatuconcertband.org.nz/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <span class="logo-text">MCB</span>
                <span class="logo-subtitle">Manawatu Concert Band</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#events" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#news" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="join.php" class="nav-link active">Join</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#members" class="nav-link members-btn">Members Login</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title">Join the Manawatu Concert Band</h1>
                <p class="page-subtitle">Become part of our musical family</p>
                <div class="page-header-divider"></div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <div class="join-content">
                <!-- Left Column -->
                <div class="join-left">
                    <div class="content-card">
                        <h2>How to Join the Band</h2>
                        <p>If you are interested in joining the Manawatu Concert Band, please read through the information on this page. It will give you an idea of the commitment required in joining the band.</p>
                        <p>If you wish to join, or if you have any questions not covered by this website, please feel free to <a href="index.php#contact">contact us</a>.</p>
                    </div>

                    <div class="content-card">
                        <h2>Rehearsals & Performances</h2>
                        <div class="rehearsal-info">
                            <div class="info-item">
                                <div class="info-icon">🕢</div>
                                <div class="info-content">
                                    <h4>Practice Schedule</h4>
                                    <p>Tuesday nights from 7.30 to 9.30pm</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">🏫</div>
                                <div class="info-content">
                                    <h4>Location</h4>
                                    <p>Freyberg High School music suite</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">🎭</div>
                                <div class="info-content">
                                    <h4>Performances</h4>
                                    <p>Three major concerts and up to two other gigs per year</p>
                                </div>
                            </div>
                        </div>
                        <p>Practices typically begin with the start of the school year and conclude soon after the end-of-year concert. Practices continue between school terms.</p>
                    </div>

                    <div class="content-card">
                        <h2>Skill Level</h2>
                        <div class="skill-level-content">
                            <div class="skill-image">
                                <span class="music-icon">🎼</span>
                            </div>
                            <div class="skill-text">
                                <p>The band contains a range of skill levels and accepts players of all ages. The minimum playing standard we recommend is <strong>Grade 5</strong> (or equivalent), although some positions require <strong>Grade 8</strong>.</p>
                                <p>This is only a guide, so if you are interested in joining but are unsure if you will be able to play the music, we encourage you to <a href="index.php#contact">contact us</a> and our Musical Director will get in touch to discuss.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content-card">
                        <h2>Fees</h2>
                        <div class="fee-highlight">
                            <div class="fee-amount">$90</div>
                            <div class="fee-details">
                                <p>per year with a discount for prompt payment</p>
                                <span class="fee-note">Modest annual membership fee</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="join-right">
                    <div class="content-card">
                        <h2>Current Vacancies</h2>
                        <div class="vacancies-list">
                            <div class="vacancy-item">
                                <div class="vacancy-instrument">🎷 Bassoon</div>
                                <div class="vacancy-details">
                                    <span class="vacancy-count">x1</span>
                                    <span class="vacancy-grade">Grade 5 min.</span>
                                </div>
                            </div>
                            <div class="vacancy-item">
                                <div class="vacancy-instrument">🎺 French Horn</div>
                                <div class="vacancy-details">
                                    <span class="vacancy-count">x1</span>
                                    <span class="vacancy-grade">Grade 5 min.</span>
                                </div>
                            </div>
                            <div class="vacancy-item">
                                <div class="vacancy-instrument">🎵 Tenor Trombone</div>
                                <div class="vacancy-details">
                                    <span class="vacancy-count">x1</span>
                                    <span class="vacancy-grade">Grade 5 min.</span>
                                </div>
                                <div class="vacancy-note">Music is in concert pitch, bass clef</div>
                            </div>
                        </div>
                        <div class="vacancy-footer">
                            <p><em>Last Updated: August 2025</em></p>
                            <p><strong>Note:</strong> We limit the size of the band to 45 players.</p>
                        </div>
                        <div class="vacancy-info">
                            <p>If you are interested in joining on an instrument that is not listed above, please <a href="index.php#contact">contact us</a> and we can discuss what options are available.</p>
                            <p>If we are unable to accommodate you at present, we can place you on a <strong>wait list</strong> and you will be notified when vacancies become available.</p>
                        </div>
                    </div>

                    <div class="content-card">
                        <h2>Instrumentation</h2>
                        <p>Our standard playing configuration is as follows:</p>
                        <div class="instrumentation-table">
                            <div class="instrument-group">
                                <h4>Woodwinds</h4>
                                <div class="instrument-row">
                                    <span class="instrument-name">Flute/Piccolo</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Flute</span>
                                    <span class="instrument-count">4</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Oboe</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Bassoon</span>
                                    <span class="instrument-count">2</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Clarinet</span>
                                    <span class="instrument-count">8</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Bass Clarinet</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Alto Saxophone</span>
                                    <span class="instrument-count">2</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Tenor Saxophone</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Baritone Saxophone</span>
                                    <span class="instrument-count">1</span>
                                </div>
                            </div>
                            <div class="instrument-group">
                                <h4>Brass</h4>
                                <div class="instrument-row">
                                    <span class="instrument-name">Trumpet</span>
                                    <span class="instrument-count">5</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">French Horn</span>
                                    <span class="instrument-count">4</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Trombone</span>
                                    <span class="instrument-count">4</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Euphonium</span>
                                    <span class="instrument-count">2</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Tuba</span>
                                    <span class="instrument-count">3</span>
                                </div>
                            </div>
                            <div class="instrument-group">
                                <h4>Rhythm Section</h4>
                                <div class="instrument-row">
                                    <span class="instrument-name">Bass Guitar</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Drum Kit</span>
                                    <span class="instrument-count">1</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Percussion</span>
                                    <span class="instrument-count">2</span>
                                </div>
                                <div class="instrument-row">
                                    <span class="instrument-name">Timpani</span>
                                    <span class="instrument-count">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section section-alt">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Make Beautiful Music Together?</h2>
                <p>Join the Manawatu Concert Band today and become part of our musical family!</p>
                <div class="cta-buttons">
                    <a href="index.php#contact" class="btn btn-primary">Contact Us</a>
                    <a href="index.php#home" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Manawatu Concert Band</h3>
                    <p>Palmerston North's premier community symphonic band</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php#home">Home</a></li>
                        <li><a href="index.php#events">Events</a></li>
                        <li><a href="index.php#news">News</a></li>
                        <li><a href="join.php">Join</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Connect</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Manawatu-Concert-Band-540888722918012/" target="_blank" class="social-link">
                            <span class="social-icon">📘</span>
                            Facebook
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; Copyright 2025 Manawatu Concert Band. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
