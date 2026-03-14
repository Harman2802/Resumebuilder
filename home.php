<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="join.css">
    
    <!-- Include in your <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>
<body>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<header>
  <div class="nav__content">
    <div class="nav__bar" style>
        <a class="nav__bar-logo-rio" href="#"><img src="im/logo.jpg" alt="Logo" height="30" class="me-2" />  
      <div class="d-flex flex-column lh-sm">
        <span class="fw-semibold text-dark">Resume Maker</span>
        <small class="text-muted" style="font-size: 10px;">by Students</small>
      </div>
</a>
    
    
<div class="nav__bar-menu">
  <a class="nav__bar-link" href="#" data-trigger="resume_templates">
    Resume Templates
    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20" width="20">
      <path d="M10.2 10.4 13.1 7.6 14.5 9l-4.3 4.2-4.2-4.2 1.4-1.4z"></path>
    </svg>
  </a>

  <a class="nav__bar-link" href="#" data-trigger="resume_examples">
    Resume Examples
    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20" width="20">
      <path d="M10.2 10.4 13.1 7.6 14.5 9l-4.3 4.2-4.2-4.2 1.4-1.4z"></path>
    </svg>
  </a>

  <a class="nav__bar-link" href="#" data-trigger="blog">
    Resources
    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20" width="20">
      <path d="M10.2 10.4 13.1 7.6 14.5 9l-4.3 4.2-4.2-4.2 1.4-1.4z"></path>
    </svg>
  </a>

  <a class="nav__bar-link" target="_blank" href="#">FAQ</a>
  <div class="nav__bar-separator"></div>
  <a class="nav__bar-auth-link" id="my_account" href="register.php">Account</a>
</div>

<!-- Dropdown Content -->
<div class="nav__menu">
  <div class="nav__menu-main">
    <ul class="collapse nav__menu-links-container">
    <div class="nav__menu-links-title">Resume</div>
    <li class="collapse__item">
      <div class="nav__menu-single-link-container">
        <a class="nav__menu-link" href="#">Resume Templates</a>
        <div class="collapse__toggle nav__menu_collapse_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
      <div class="collapse__body">
        <div class="collapse__body-inner nav__menu-submenus-container">
          <a class="nav__menu-sublink" href="#">Word</a>
          <a class="nav__menu-sublink" href="#">Simple</a>
          <a class="nav__menu-sublink" href="#">Professional</a>
          <a class="nav__menu-sublink" href="#">Modern</a>
          <a class="nav__menu-sublink" href="#">Creative</a>
          <a class="nav__menu-sublink" href="#">Ats</a>
          <a class="view-all-button" rel="nofollow" href="#">View All
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
          </a>
        </div>
      </div>
    </li>

    <li class="collapse__item">
      <div class="nav__menu-single-link-container">
        <a class="nav__menu-link" href="#">Resume Examples</a>
        <div class="collapse__toggle nav__menu_collapse_button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
        </svg>
        </div>
      </div>
      <div class="collapse__body">
        <div class="collapse__body-inner nav__menu-submenus-container">
          <a class="nav__menu-sublink" href="#">Education</a>
          <a class="nav__menu-sublink" href="#">Government</a>
          <a class="nav__menu-sublink" href="#">Engineering</a>
          <a class="nav__menu-sublink" href="#">Retail</a>
          <a class="view-all-button" rel="nofollow" href="#">View All
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
          </a>
        </div>
      </div>
    </li>
    <li class="collapse__item">
      <div class="nav__menu-single-link-container">
        <a class="nav__menu-link" href="#">Most Popular</a>
        <div class="collapse__toggle nav__menu_collapse_button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
        </svg>
        </div>
      </div>
      <div class="collapse__body">
        <div class="collapse__body-inner nav__menu-submenus-container">
          <a class="nav__menu-sublink" href="#">Nurse</a>
          <a class="nav__menu-sublink" href="#">Student</a>
          <a class="nav__menu-sublink" href="#">Internship</a>
          <a class="nav__menu-sublink" href="#">Teacher</a>
          <a class="nav__menu-sublink" href="#">Accountant</a>
          <a class="view-all-button" rel="nofollow" href="#">View All
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
          </a>
        </div>
      </div>
    </li>
    </ul>
    <ul class="collapse nav__menu-links-container">
    <div class="nav__menu-links-title">Resources</div>
    <li class="collapse__item">
      <div class="nav__menu-single-link-container">
        <a class="nav__menu-link" href="#">Resources</a>
        <div class="collapse__toggle nav__menu_collapse_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
      <div class="collapse__body">
        <div class="collapse__body-inner nav__menu-submenus-container">
          <a class="nav__menu-sublink" href="#">Video</a>
          <a class="nav__menu-sublink" href="#">Podcasts</a>
        </div>
      </div>
    </li>
    <li class="collapse__item">
      <div class="nav__menu-single-link-container">
        <a class="nav__menu-link" href="#">Blog Categories</a>
        <div class="collapse__toggle nav__menu_collapse_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
      <div class="collapse__body">
        <div class="collapse__body-inner nav__menu-submenus-container">
          <a class="nav__menu-sublink" href="#">Job Interview</a>
          <a class="nav__menu-sublink" href="#">Cover Letter</a>
          <a class="nav__menu-sublink" href="#">Carrer</a>
          <a class="nav__menu-sublink" href="#">Resume Help</a>
          <a class="view-all-button" rel="nofollow" href="#">View All
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="nav__menu_collapse_button_icon">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7418 9.43164L18.2161 10.7831L12.7359 16.6762C12.3395 17.1086 11.6579 17.1086 11.2616 16.6762L5.8125 10.7831L7.28681 9.43164L11.9987 14.5206L16.7418 9.43164Z" fill="currentColor"></path>
          </svg>
          </a>
        </div>
      </div>
    </li>
    </ul>
  </div>

</header>
<section>

<div class="build">
<div class="promo">

<div class="promo content">
<h1><b>The professional Resume Builder</b>
</h1>
<h4>Build beautiful, recruiter-tested resumes in a few clicks! Our resume builder is powerful and easy to use, with a range of amazing functions. Custom-tailor resumes for any job within minutes. Increase your interview chances and rise above the competition.</h4>

<div class="button">
    <div>
    <button class="btn btn-primary">Create my resume</button>
    </div><div> 
 </div>
</div>
</div>
<div class="image">
    <img src="im/resume pic.png" alt="Description of image" width="500">
</div>
</div>
</section>

<section>
<div class="build">
<div class="promo">
<div class="image">
    <img src="im/lg.png" alt="Description of image" width="400">
</div>
<div class="promo content">
<h1><b>Create a resume to land your next job</b>
</h1>
<h4> We have developed a resume builder based on feedback from thousands of users, recruiter expertise, stellar template design and the best hiring practices. The goal is simple: help you land that dream job interview! Get an advantage in the modern professional environment.</h4>

<div class="button">
    <div>
    <button class="btn btn-primary"> Build your resume</button>
    </div><div> 
 </div>
</div>
</div>
</div>
</section>

<div class="build-promo__features">
  <div class="builder-promo__feature">
    <div class="builder-promo__feature-icon is image"><i class="fa-solid fa-rocket"></i></div>
    <strong class="builder-promo__feature-title">
      Powerful and easy-to-use 
    </strong>
    <div class="builder-promo__feature-description">
      <p>Created to be suitable for all levels of job seekers. Our host of powerful features ranges from an excellent spell-checker, to job tracking, multi-format export, auto-generated summaries and more.</p>
    </div>
  </div>


<div class="builder-promo__feature">
    <div class="builder-promo__feature-icon is image"><i class="fa-regular fa-thumbs-up"></i></div>
    <strong class="builder-promo__feature-title">
      Customization made simple
    </strong>
    <div class="builder-promo__feature-description">
      <p>Fine-tune your resume for a specific job with ease. We help you turn a generic document into a cutting-edge instrument that wins interviews. Transform universal resumes into perfect sales pitches with a few key-strokes.</p>
    </div>
  </div>

  <div class="builder-promo__feature">
    <div class="builder-promo__feature-icon is image"><i class="fa-solid fa-clipboard-list"></i></div>
    <strong class="builder-promo__feature-title">
      Templates designed by experts
    </strong>
    <div class="builder-promo__feature-description">
      <p>Our designed templates and examples are reviewed by recruiters. This gives you a powerful boost in resume creation, straight from the other side of the job market - the people responsible for hiring and candidate evaluation.</p>
    </div>
  </div>
</div>
<section>

<div class="resume-templates">
  <div class="resume-templates__container">

    <h2 class="resume-templates__title">Proven Resume Templates</h2>
    <div class="resume-templates__text">
      The resume templates included in our resume builder have been approved by seasoned recruiters.
      Capturing the recruiters’ attention is the first step towards getting hired.
    </div>
    <div class="resume-templates__cta">
      <a class="button" href="#">Select Templates</a>
    </div>
    <div class="resume-templates__trustpilot">
      <div class="resume-templates__stars" data-rating="4.4"></div>
      <div class="resume-templates__rating">4.4 out of 5</div>
      <div class="resume-templates__trustpilot-text">
        based on 50,780 reviews on <a href="#" target="_blank" style="color:#ffc107;">Trustpilot</a>
      </div>
    </div>
    <br>
<!-- Your Resume Slider Section -->
<div class="resume-templates__slider">
  <div class="resume-templates__item">
    <img src="im/temp1.jpg" alt="Brussels" width="300px">
    <div class="resume-templates__item-name-container">
      <div class="resume-templates__item-name">Brussels</div>
      <div class="resume-templates__item-usage-number">150,000+ users chose this template</div>
    </div>
    <a href="#" class="resume-templates__item-button">Use this template</a>
  </div>

  <div class="resume-templates__item">
    <img src="im/temp2.jpg" alt="Prague" width="300px" height="30px">
    <div class="resume-templates__item-name-container">
      <div class="resume-templates__item-name">Prague</div>
      <div class="resume-templates__item-usage-number">94,000+ users chose this template</div>
    </div>
    <a href="#" class="resume-templates__item-button">Use this template</a>
  </div>

  <div class="resume-templates__item">
    <img src="im/temp3.jpg" alt="Shanghai" width="300px">
    <div class="resume-templates__item-name-container">
      <div class="resume-templates__item-name">Shanghai</div>
      <div class="resume-templates__item-usage-number">200,000+ users chose this template</div>
    </div>
    <a href="#" class="resume-templates__item-button">Use this template</a>
  </div>

  <div class="resume-templates__item">
    <img src="im/temp4.jpg" alt="Toronto" width="300px">
    <div class="resume-templates__item-name-container">
      <div class="resume-templates__item-name">Toronto</div>
      <div class="resume-templates__item-usage-number">190,000+ users chose this template</div>
    </div>
    <a href="#" class="resume-templates__item-button">Use this template</a>
  </div>
</div>
</section>

<section class="resume-section">
  <h2>Get hired fast with a powerful resume</h2>

  <div class="features">
      <div class="feature-item">
          <img src="im/resume.png" alt="Resume Icon">
          <div class="text1">
              <h4>A better resume in minutes</h4>
              <p>Replace your old resume in a few simple clicks. Our builder gives recruiters what they want.</p>
          </div>
      </div>

      <div class="feature-item">
          <img src="im/ats.jpg" alt="ATS Icon">
          <div class="text1">
              <h4>ATS-friendly templates</h4>
              <p>Tick every box and make sure your resume is never filtered out by the hiring software.</p>
          </div>
      </div>

      <div class="feature-item">
          <img src="im/pre.png" alt="Content Icon">
          <div class="text1">
              <h4>Pre-written content</h4>
              <p>Stop worrying about words. Save time by adding pre-approved, tested content from certified writers.</p>
          </div>
      </div>

      <div class="feature-item">
          <img src="im/ai.avif" alt="AI Icon">
          <div class="text1">
              <h4>Easy with AI</h4>
              <p>Quickly generate formal phrases and summaries. Sound professional, faster.</p>
          </div>
      </div>

      <div class="feature-item">
          <img src="im/beat.png" alt="Competition Icon">
          <div class="text1">
              <h4>Beat the competition</h4>
              <p>Our tested resume templates are designed to make you more attractive to recruiters.</p>
          </div>
      </div>

      <div class="feature-item">
          <img src="im/paid.png" alt="Salary Icon">
          <div class="text1">
              <h4>Get paid more</h4>
              <p>A higher salary begins with a strong resume. Our salary analyzer tells you if your job offer is competitive.</p>
          </div>
      </div>
  </div>
</section>

<section class="resume-builder">
<div class="resume-header">
  <h2>This resume builder actually gets you job</h2>
  <a href="#" class="btn">Get hired faster</a>
</div>

  <div class="resume-grid">
    <div class="resume-card">
      <a href="#">
        <img src="im/recruit.png" alt="Recruiter Outreach" />
      </a>
      <h4>Recruiter Outreach</h4>
      <p>They're hiring now. Auto-match your resume with 50 recruiters a week</p>
    </div>

    <div class="resume-card">
      <a href="#">
        <img src="im/interview.png" alt="Interview Prep" />
      </a>
      <h4>Interview prep</h4>
      <p>Get better every time. Unlock 10,000 questions from real interviews</p>
    </div>

    <div class="resume-card">
      <a href="#">
        <img src="im/hired.png" alt="Auto Apply" />
      </a>
      <h4>Auto apply</h4>
      <p>You pick the job and we do the rest…</p>
    </div>
  </div>
 
</section>

<!--example-->
<section class="resume-examples-section">
  <div class="categories">
    <button class="active">All</button>
    <button>Student</button>
    <button>Legal</button>
    <button>Doctor</button>
    <button>Internship</button>
    <button>Architect</button>
    <button>Civil Engineer</button>
    <button>Driver</button>
    <button>Teacher</button>
    <button>Accountant</button>
    <button>Retail</button>
    <button>Human Resources</button>
    <button>Administrative</button>
  </div>
  <div class="content">
    <div class="text">
      <h2>Get the interview<br>with professional resume examples</h2>
      <p>
        Impress employers and recruiters. Choose from hundreds of professionally-designed resume examples.
        Download to Word or PDF.
      </p>
      <a href="#" class="primary-button">Find resume examples</a>
      <div class="rating">
        <div class="stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
        <small>4.4 out of 5 based on 53,622 reviews on <a href="#">Trustpilot</a></small>
      </div>
    </div>
    <div class="images">
      <a href="#"><img src="im/r1.jpg" alt="Resume Example 1" /></a>
      <a href="#"><img src="im/r4.jpg" alt="Resume Example 2" /></a>
      <a href="#"><img src="im/r3.webp" alt="Resume Example 3" /></a>
      <a href="#"><img src="im/r5.png" alt="Resume Example 4" /></a>
    </div>
  </div>
</section>

<!-- #region reviews -->
<section class="trustpilot-overview__container">

  <h2 class="trustpilot-overview__title">
    Reviewed by the community. Trusted by professionals
  </h2>

  <div class="trustpilot-overview__wrapper">
    <div class="trustpilot-overview__rating-wrapper">
      <div class="trustpilot-overview__rating container">
        <div class="trustpilot-overview__rating">4.4 out of 5</div>
        <div class="trustpilot-overview__stars">
          <i class="fas fa-star star-icon"></i>
          <i class="fas fa-star star-icon"></i>
          <i class="fas fa-star star-icon"></i>
          <i class="fas fa-star star-icon"></i>
          <i class="fas fa-star-half-alt star-icon"></i>
        </div>
      </div>
      <div class="trustpilot-overview__logo is-image-loaded"></div>
      <div class="trustpilot-overview__rating-label">based on 53,700 reviews</div>
    </div>
  </div>

  <!-- ✅ Slick Slider Reviews Container -->
  <div class="trustpilot-overview__reviews-slider">
    <div class="trustpilot-overview__review">
      <div class="trustpilot-overview__review-stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </div>
      <div class="trustpilot-overview__review-title">Resume Maker is an amazing platform-super....</div>
      <div class="trustpilot-overview__review-text">
        Resume Maker is an amazing platform—super user-friendly...
      </div>
      <div class="trustpilot-overview__review-label">Aman Sharma · 4 days ago</div>
    </div>

    <div class="trustpilot-overview__review">
      <div class="trustpilot-overview__review-stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </div>
      <div class="trustpilot-overview__review-title">Helpful but expensive</div>
      <div class="trustpilot-overview__review-text">
        It's very helpful and excellent but the templates that aren't free are disappointing...
      </div>
      <div class="trustpilot-overview__review-label">Mohamad Henifa · 2 days ago</div>
    </div>

    <div class="trustpilot-overview__review">
      <div class="trustpilot-overview__review-stars">
        <i class="fas fa-star"></i><i class="fas fa-star"></i>
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
      </div>
      <div class="trustpilot-overview__review-title">Super easy and effective tool</div>
      <div class="trustpilot-overview__review-text">
        Resume Maker made building my CV quick and effortless...
      </div>
      <div class="trustpilot-overview__review-label">Gurjot · 5 days ago</div>
    </div>
  </div>

</section>

<!--faq question-->
<div class="wrapper">
  <h1>Frequently Asked Question</h1>
  <div class="faq">
    <button class="accordion">
      What is the definition of a resume?
      <i class="fa-solid fa-caret-down"></i>
    </button>
    <div class="pannel">
      <p>A resume is a concise document that summarizes your work experience, education, skills, qualities, and accomplishments. It’s used to showcase your qualifications to potential employers and helps you stand out. It tells employers why you deserve a job interview in one or two powerful pages.</p>
    </div>
  </div>
  <div class="faq">
    <button class="accordion">
     What is the diffrence between a CV and a resume?
      <i class="fa-solid fa-caret-down"></i>
    </button>
    <div class="pannel">
      <p>In the U.S. and elsewhere around the world, the terms "CV" and "resume" are often used in the same way. However, there are some differences. A resume is typically shorter, highlighting relevant skills and experience for a specific job. A CV (curriculum vitae) is more detailed, focusing on your entire career. For most U.S. job applications, a resume is the preferred format.</p>
    </div>
  </div>
  <div class="faq">
    <button class="accordion">
     How do i choose the right resume template? 
      <i class="fa-solid fa-caret-down"></i>
    </button>
    <div class="pannel">
      <p>To choose the right resume template, consider the job you're applying for and your industry. If you're in a creative field, a more visually appealing template might be best. For traditional industries like finance or law, stick to a clean, professional layout. Ensure the template is easy to read, highlights your strengths, and aligns with your experience level. Avoid overloading it with too many graphics or colors that could distract from your qualifications. Choosing the best resume format for the template is also important: Chronological (or reverse chronological) - Most popular:</p>
    </div>
  </div>
  <div class="faq">
    <button class="accordion">
      How far back should a resume go?
      <i class="fa-solid fa-caret-down"></i>
    </button>
    <div class="pannel">
      <p>A resume should typically go back 10-15 years, focusing on the most recent and relevant experience, and not necessarily all your previous jobs. Older jobs may be summarized briefly or left out if they aren't relevant to the position you're applying for. The goal is to highlight your most valuable skills and accomplishments without overwhelming the reader by making your resume too long. </p>
    </div>
  </div>
  <div class="faq">
    <button class="accordion">
      What resume file format can i download in ?
      <i class="fa-solid fa-caret-down"></i>
    </button>
    <div class="pannel">
      <p>While you can’t download it directly in Google Docs format, you can download certain resumes in the .docx file and easily upload them to Google Drive, where you can open and edit them in Google Docs. Both .docx and PDF formats are widely accepted for job applications. View how to download in various formats in the resume builder</p>
    </div>
  </div>
  <div class="faq-footer">
    <p>Can’t find what you need yet? — <a href="#">View our customer support articles</a></p>
    <p>Need more career advice? — <a href="#">View our career resources</a></p>
  </div>
</div>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <h2> Quick Links</h2>
            <a href="#"><i class="fas fa-chevron-right"></i>Home</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Resume Examples</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Resume Templates</a>
            <a href="#"><i class="fas fa-chevron-right"></i>Resources</a> 
            <a href="#"><i class="fas fa-chevron-right"></i>FAQ</a>
            
        </div>
    
        <div class="box">
            <h2> Contact Info</h2>
            <a href="#"><i class="fas fa-phone"></i> +91 98140-98989</a>
            <a href="#"><i class="fas fa-phone"></i> +91 98160-98909</a>
            <a href="#"><i class="fas fa-envelope"></i>pharman909@gmail.com</a>
            <a href="#"><i class="fas fa-envelope"></i>preet99sahil@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>punjab, india -144410</a>
    </div>  

    <div class="box">
        <h2> Follow Us</h2>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-twitter"></i>  twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        
    </div>
</div>

<div style="text-align:center; color:#aaa; margin-top: 40px; font-size:14px;">
  © 2025 Resume Maker | Made with ❤️ in India
</div>

</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('.resume-templates__slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      infinite: true,
      dots: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 1 }
        }
      ]
    });
  });
</script>
<script>
  $(document).ready(function(){
    $('.trustpilot-overview__reviews-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true
    });
  });
</script>

<script>
  const accordions = document.querySelectorAll('.accordion');

  accordions.forEach(accordion => {
    accordion.addEventListener('click', function () {
      // Toggle active class on the FAQ container
      const faq = this.parentElement;
      faq.classList.toggle('active');

      // Toggle the panel display
      const panel = this.nextElementSibling;
      if (panel.style.display === 'block') {
        panel.style.display = 'none';
      } else {
        panel.style.display = 'block';
      }
    });
  });
</script>
<script>
  const links = document.querySelectorAll('[data-trigger]');
  const dropdown = document.querySelector('.nav__dropdown');
  const contents = document.querySelectorAll('.nav__dropdown-content');

  links.forEach(link => {
    link.addEventListener('mouseover', () => {
      const target = link.getAttribute('data-trigger');

      contents.forEach(content => {
        if (content.getAttribute('data-content') === target) {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      });

      dropdown.classList.remove('hidden');
    });
  });

  dropdown.addEventListener('mouseleave', () => {
    dropdown.classList.add('hidden');
  });
</script>

<script>
  document.querySelectorAll('.collapse__item, .collase__item').forEach(item => {
    item.querySelector('.nav__menu-single-link-container').addEventListener('click', () => {
      item.classList.toggle('open');
    });
  });
</script>





</body>
</html>