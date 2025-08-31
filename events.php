<?php
// Events page for Manawatu Concert Band
// Pure PHP solution - no external HTML files needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Manawatu Concert Band</title>
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
                    <a href="events.php" class="nav-link active">Events</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#news" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="join.php" class="nav-link">Join</a>
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
                <h1 class="page-title">🎭 Events</h1>
                <p class="page-subtitle">Experience the magic of live music with the Manawatu Concert Band</p>
                <div class="page-header-divider"></div>
                <div class="header-stats">
                    <div class="stat-item">
                        <span class="stat-number">2</span>
                        <span class="stat-label">Major Concerts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Band Members</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">30+</span>
                        <span class="stat-label">Years of Music</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section">
        <div class="container">
            <!-- Upcoming Events -->
            <div class="events-section">
                <div class="section-header">
                    <h2 class="section-title">Upcoming Events</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="event-card featured">
                    <div class="event-image">
                        <img src="old/manawatuconcertband.org.nz/manawatuconcertband.org.nz/images/genrow20151107.jpg" alt="Manawatu Concert Band performing live" class="event-background-image">
                        <div class="event-image-overlay"></div>
                    </div>
                    <div class="event-date">
                        <div class="event-month">NOV</div>
                        <div class="event-day">15</div>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Manawatu Concert Band November Concert</h3>
                        <div class="event-details">
                            <div class="event-time">
                                <span class="event-icon">🕢</span>
                                <span>7.30pm</span>
                            </div>
                            <div class="event-date-full">
                                <span class="event-icon">📅</span>
                                <span>Saturday, November 15th</span>
                            </div>
                        </div>
                        <p class="event-description">Music from Movies, TV, Films and more.</p>
                        <div class="event-actions">
                            <button class="btn btn-primary">Get Tickets</button>
                            <button class="btn btn-secondary">Add to Calendar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Events -->
            <div class="events-section">
                <div class="section-header">
                    <h2 class="section-title">Past Events</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="no-events">
                    <div class="no-events-icon">🎭</div>
                    <p>No past events to display at this time.</p>
                </div>
            </div>

            <!-- Event Information -->
            <div class="events-section">
                <div class="section-header">
                    <h2 class="section-title">Event Information</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-icon">🏛️</div>
                        <h3>Concert Venues</h3>
                        <p>Our concerts are typically held at various venues throughout Palmerston North and the Manawatu region. Specific venue details for each concert will be announced closer to the event date.</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">🎫</div>
                        <h3>Ticket Information</h3>
                        <p>Tickets for our concerts are usually available at the door on the night of the performance. We recommend arriving early to secure your seat.</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">📅</div>
                        <h3>Concert Schedule</h3>
                        <p>The Manawatu Concert Band typically performs two major concerts annually (May/June and October/November) plus local festivals and community events.</p>
                    </div>
                </div>

                <div class="schedule-details">
                    <h3>Annual Concert Schedule</h3>
                    <div class="schedule-timeline">
                        <div class="schedule-item">
                            <div class="schedule-season">Autumn</div>
                            <div class="schedule-content">
                                <h4>May/June Concert</h4>
                                <p>Annual spring performance featuring a variety of musical styles</p>
                            </div>
                        </div>
                        <div class="schedule-item">
                            <div class="schedule-season">Spring</div>
                            <div class="schedule-content">
                                <h4>October/November Concert</h4>
                                <p>Annual autumn performance with seasonal themes</p>
                            </div>
                        </div>
                        <div class="schedule-item">
                            <div class="schedule-season">Year-round</div>
                            <div class="schedule-content">
                                <h4>Local Festivals & Community Events</h4>
                                <p>Including the Feilding Festival of Bands and various play-outs</p>
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
                <h2>Stay Connected</h2>
                <p>Follow us for the latest event updates and announcements!</p>
                <div class="cta-buttons">
                    <a href="https://www.facebook.com/Manawatu-Concert-Band-540888722918012/" target="_blank" class="btn btn-primary">Follow on Facebook</a>
                    <a href="index.php#home" class="btn btn-secondary">Back to Home</a>
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
                        <li><a href="events.php">Events</a></li>
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
