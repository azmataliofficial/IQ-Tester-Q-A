<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IQVision - Check Your IQ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="Mental.css">
  <script src="script.js"></script>
</head>

<body>
  <!-- Header Section -->
  <header class="nav-bar">
    <div class="logo">IQ<span>Vision</span></div>
    <i class="fa-solid fa-bars menu-toggle"></i>
    <nav class="nav-links">
      <a href="Index.php#home">Home</a>
      <a href="Index.php#about">About Test</a>
      <a href="Index.php#contact">Contact</a>
      <a href="Login.php" class="nav-btn">Login</a>
    </nav>
  </header>

  <!-- Main Hero Section -->
  <main id="home" class="home">
    <section class="home-content">
      <p class="tagline">clear vision • sharp mind • accurate results</p>
      <h1>Discover Your <span class="highlight">Cognitive Potential</span></h1>
      <p class="subtitle">
        Take our scientifically designed IQ test to measure your reasoning, memory, and problem-solving abilities.
        Get instant results with detailed analysis in just 10 minutes.
      </p>

      <!-- Primary Action Buttons -->
      <div class="btn-group">
        <a href="Login.php" class="btn primary">
          <i class="fas fa-play-circle"></i> Start Free Test
        </a>
        <a href="SignUp.php" class="btn secondary">
          <i class="fas fa-user-plus"></i> Create Account
        </a>
        <a href="Result.php" class="btn primary">
          <i class="fas fa-chart-bar"></i> View Results
        </a>
        <a href="Administrator.php" class="btn secondary">
          <i class="fas fa-cog"></i> Admin Panel
        </a>
      </div>

      <!-- Statistics Section -->
      <div class="statistics">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="stat-content">
            <span class="stat-number">2,500+</span>
            <span class="stat-label">Users Tested</span>
          </div>
        </div>
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div class="stat-content">
            <span class="stat-number">10 min</span>
            <span class="stat-label">Average Duration</span>
          </div>
        </div>
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div class="stat-content">
            <span class="stat-number">Instant</span>
            <span class="stat-label">Results</span>
          </div>
        </div>
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="stat-content">
            <span class="stat-number">4.8/5</span>
            <span class="stat-label">User Rating</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Test Preview Section -->
    <section class="test-preview">
      <div class="preview-header">
        <h2>What to Expect in Your IQ Test</h2>
        <p>A comprehensive assessment covering multiple cognitive domains</p>
      </div>
      <div class="preview-grid">
        <div class="preview-card">
          <div class="preview-icon">
            <i class="fas fa-brain"></i>
          </div>
          <h3>Logical Reasoning</h3>
          <p>Pattern recognition and deductive reasoning questions</p>
        </div>
        <div class="preview-card">
          <div class="preview-icon">
            <i class="fas fa-memory"></i>
          </div>
          <h3>Memory Test</h3>
          <p>Short-term and working memory assessment</p>
        </div>
        <div class="preview-card">
          <div class="preview-icon">
            <i class="fas fa-puzzle-piece"></i>
          </div>
          <h3>Problem Solving</h3>
          <p>Complex scenarios requiring innovative solutions</p>
        </div>
        <div class="preview-card">
          <div class="preview-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3>Analytical Skills</h3>
          <p>Data interpretation and analytical thinking tasks</p>
        </div>
      </div>
    </section>
  </main>

  <!-- About Test Section -->
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-image">
        <img src="https://e5jup2y78j7.exactdn.com/wp-content/uploads/2025/06/iq-scale-explained-1536x1024-1.webp"
          alt="IQ Test Visualization" />
        <div class="image-overlay">
          <div class="overlay-content">
            <i class="fas fa-brain"></i>
            <h4>Scientifically Validated</h4>
            <p>Based on established psychological principles</p>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="section-header">
          <h2 class="section-subtitle">About Our Assessment</h2>
        </div>

        <div class="about-features">
          <div class="feature-point">
            <div class="feature-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div class="feature-text">
              <h4>Reliable & Valid</h4>
              <p>Our test follows psychometric standards for accurate measurement</p>
            </div>
          </div>
          <div class="feature-point">
            <div class="feature-icon">
              <i class="fas fa-user-clock"></i>
            </div>
            <div class="feature-text">
              <h4>Time-Efficient</h4>
              <p>Complete assessment in just 10-15 minutes</p>
            </div>
          </div>
          <div class="feature-point">
            <div class="feature-icon">
              <i class="fas fa-chart-pie"></i>
            </div>
            <div class="feature-text">
              <h4>Detailed Analysis</h4>
              <p>Get comprehensive breakdown of your cognitive strengths</p>
            </div>
          </div>
        </div>

        <div class="about-description">
          <!-- <p>
            Our IQ assessment measures multiple cognitive domains including logical reasoning,
            memory capacity, problem-solving abilities, and analytical thinking. The adaptive
            testing algorithm adjusts question difficulty based on your responses, providing
            accurate measurement across all intelligence levels.
          </p> -->
          <p>
            Results are presented on a standardized scale with percentile rankings and detailed
            insights into your cognitive profile. All assessments are confidential and designed
            to provide meaningful feedback for personal development.
          </p>
        </div>

        <div class="cta-buttons">
          <a href="SignUp.php" class="btn primary">
            <i class="fas fa-graduation-cap"></i> Start Your Assessment
          </a>
          <a href="#faq" class="btn secondary">
            <i class="fas fa-question-circle"></i> Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer" id="contact">
    <div class="footer-container">
      <div class="footer-main">
        <!-- Brand Column -->
        <div class="footer-brand">
          <div class="footer-logo">IQ<span>Vision</span></div>
          <p class="footer-tagline">
            Empowering individuals to understand and enhance their cognitive abilities
            through scientifically designed intelligence assessments.
          </p>

          <div class="trust-badges">
            <div class="badge">
              <i class="fas fa-lock"></i>
              <span>Secure & Confidential</span>
            </div>
            <div class="badge">
              <i class="fas fa-certificate"></i>
              <span>Professional Standard</span>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="social-link" aria-label="Connect on Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-link" aria-label="Follow on Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-link" aria-label="Join on LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="social-link" aria-label="Follow on Instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links Column -->
        <div class="footer-column">
          <h4 class="footer-title">Quick Access</h4>
          <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Test</a></li>
            <li><a href="Login.php">Take Test</a></li>
            <li><a href="Result.php">View Results</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>

        <!-- Resources Column -->
        <div class="footer-column">
          <h4 class="footer-title">Resources</h4>
          <ul class="footer-links">
            <li><a href="#research">Research Papers</a></li>
            <li><a href="#guides">Study Guides</a></li>
            <li><a href="#blog">Cognitive Blog</a></li>
            <li><a href="#tools">Brain Tools</a></li>
            <li><a href="#support">Support Center</a></li>
          </ul>
        </div>

        <!-- Contact Column -->
        <div class="footer-column">
          <h4 class="footer-title">Contact Information</h4>
          <div class="contact-info">
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-details">
                <span>Email</span>
                <a href="mailto:support@iqvision.com">support@iqvision.com</a>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="contact-details">
                <span>Phone</span>
                <a href="tel:+15551234567">+11 123-4567</a>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-details">
                <span>Location</span>
                <span>San Francisco, CA 94105</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <div class="copyright">
            <p>&copy; 2025 <strong>IQVision</strong>. All intellectual property rights reserved.</p>
          </div>

          <div class="legal-links">
            <a href="#privacy">Privacy Policy</a>
            <span class="separator">•</span>
            <a href="#terms">Terms of Service</a>
            <span class="separator">•</span>
            <a href="#cookies">Cookie Policy</a>
            <span class="separator">•</span>
            <a href="#disclaimer">Disclaimer</a>
          </div>
        </div>

        <div class="footer-acknowledgment">
          <p>
            <i class="fas fa-heart"></i>
            Designed with precision for accurate cognitive assessment
          </p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>