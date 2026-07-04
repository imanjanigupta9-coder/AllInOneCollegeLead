<?php
// index.php
session_start();
// Generate CSRF Token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earn Your UGC-Recognized Online Degree | Premium EdTech</title>
    <meta name="description" content="Advance your career with UGC-recognized, NAAC-accredited online degrees. 100% online learning, expert faculty, and placement assistance.">
   
    <meta property="og:title" content="Earn Your UGC-Recognized Online Degree">
    <meta property="og:description" content="Advance your career with UGC-recognized, NAAC-accredited online degrees. Apply now!">
    <meta property="og:type" content="website">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        primary: '#2563EB',
                        secondary: '#3B82F6',
                        accent: '#0EA5E9',
                        brandbg: '#F8FAFC'
                    }
                }
            }
        }
    </script>
   
    <link rel="stylesheet" href="assets/css/style.css">
   
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Premium EdTech Online Degrees",
      "url": "https://yourdomain.com",
      "description": "UGC-Recognized Online Degrees with Placement Assistance."
    }
    </script>
</head>
<body class="bg-brandbg text-slate-800 font-sans antialiased overflow-x-hidden">

    <div id="toast-container" class="fixed top-24 right-5 z-[100] flex flex-col gap-3"></div>

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <i data-lucide="graduation-cap" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-slate-900">EduDegree</span>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="text-slate-600 hover:text-primary font-medium transition">Home</a>
                    <a href="#programs" class="text-slate-600 hover:text-primary font-medium transition">Programs</a>
                    <a href="#benefits" class="text-slate-600 hover:text-primary font-medium transition">Benefits</a>
                    <a href="#testimonials" class="text-slate-600 hover:text-primary font-medium transition">Testimonials</a>
                    <a href="#faq" class="text-slate-600 hover:text-primary font-medium transition">FAQ</a>
                    <a href="#apply" class="bg-primary hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-medium transition shadow-lg shadow-blue-500/30">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="absolute top-0 right-0 -z-10 w-[800px] h-[800px] bg-blue-100 rounded-full blur-3xl opacity-50 translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 -z-10 w-[600px] h-[600px] bg-cyan-100 rounded-full blur-3xl opacity-50 -translate-x-1/3 translate-y-1/3"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
               
                <div class="animate-hero">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 text-primary font-medium text-sm mb-6">
                        <span class="relative flex h-3 w-3">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                        </span>
                        🎓 Admissions Open 2026
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight text-slate-900 mb-6">
                        Earn Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">UGC-Recognized</span> Online Degree
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-lg">
                        Fast-track your career with flexible, world-class education designed for working professionals. Study anytime, anywhere.
                    </p>
                   
                    <div class="flex flex-wrap gap-4 mb-10">
                        <div class="flex items-center gap-2 text-slate-700 font-medium bg-white px-4 py-2 rounded-lg shadow-sm border border-slate-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-green-500"></i> UGC Entitled
                        </div>
                        <div class="flex items-center gap-2 text-slate-700 font-medium bg-white px-4 py-2 rounded-lg shadow-sm border border-slate-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-green-500"></i> NAAC Accredited
                        </div>
                        <div class="flex items-center gap-2 text-slate-700 font-medium bg-white px-4 py-2 rounded-lg shadow-sm border border-slate-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-green-500"></i> 100% Online
                        </div>
                        <div class="flex items-center gap-2 text-slate-700 font-medium bg-white px-4 py-2 rounded-lg shadow-sm border border-slate-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-green-500"></i> Placement Support
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="#apply" class="bg-primary hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-semibold transition shadow-xl shadow-blue-500/30 flex items-center gap-2 text-lg">
                            Apply Now <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                      <a href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20know%20more%20about%20the%20Online%20Degree%20programs." target="_blank" rel="noopener noreferrer" class="bg-white hover:bg-slate-50 text-slate-700 px-8 py-4 rounded-xl font-semibold transition shadow-md border border-slate-200 flex items-center gap-2 text-lg">
    <i data-lucide="message-circle" class="w-5 h-5 text-green-500"></i> WhatsApp Us
</a>
                    </div>
                </div>

                <div id="apply" class="relative animate-hero-form">
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary to-accent transform rotate-3 rounded-2xl opacity-20"></div>
                    <div class="relative bg-white/70 backdrop-blur-xl border border-white/40 p-8 rounded-2xl shadow-2xl">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-slate-900">Check Your Eligibility</h3>
                            <p class="text-slate-500 text-sm mt-1">Get free counselling from our experts</p>
                        </div>
                       
                        <form id="admissionForm" class="space-y-4">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                           
                            <div>
                                <input type="text" name="full_name" required placeholder="Full Name*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <input type="tel" name="mobile" required pattern="[0-9]{10}" placeholder="Mobile Number*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                <input type="email" name="email" required placeholder="Email Address*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" name="city" required placeholder="City*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                <select name="highest_qualification" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                                    <option value="">Highest Qualification*</option>
                                    <option value="12th Pass">12th Pass</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <select name="work_experience" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                                    <option value="">Work Experience*</option>
                                    <option value="Fresher">Fresher (0 Years)</option>
                                    <option value="1-3 Years">1-3 Years</option>
                                    <option value="3-5 Years">3-5 Years</option>
                                    <option value="5+ Years">5+ Years</option>
                                </select>
                                <select name="preferred_program" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                                    <option value="">Preferred Program*</option>
                                    <option value="Online MBA">Online MBA</option>
                                    <option value="Online MCA">Online MCA</option>
                                    <option value="Online MCom">Online MCom</option>
                                    <option value="Online BBA">Online BBA</option>
                                    <option value="Online BCA">Online BCA</option>
                                    <option value="Online BCom">Online BCom</option>
                                </select>
                            </div>
                           
                            <button type="submit" id="submitBtn" class="w-full bg-gradient-to-r from-primary to-secondary hover:from-blue-700 hover:to-blue-600 text-white font-semibold py-4 rounded-xl transition shadow-lg flex items-center justify-center gap-2 mt-2">
                                <span>Apply Now</span>
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                <svg id="btnSpinner" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            </button>
                           
                            <div class="flex items-center justify-center gap-1.5 mt-4 text-xs text-slate-500">
                                <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                                <span>Your information is 100% secure.</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-slate-100">
                <div class="gsap-fade-up">
                    <h4 class="text-4xl font-bold text-slate-900 mb-1 counter" data-target="15000">0</h4>
                    <p class="text-slate-500 font-medium text-sm uppercase tracking-wide">Students Enrolled</p>
                </div>
                <div class="gsap-fade-up" style="transition-delay: 100ms;">
                    <h4 class="text-4xl font-bold text-slate-900 mb-1"><span class="counter" data-target="98">0</span>%</h4>
                    <p class="text-slate-500 font-medium text-sm uppercase tracking-wide">Success Rate</p>
                </div>
                <div class="gsap-fade-up" style="transition-delay: 200ms;">
                    <h4 class="text-4xl font-bold text-slate-900 mb-1 counter" data-target="20">0</h4>
                    <p class="text-slate-500 font-medium text-sm uppercase tracking-wide">Degree Programs</p>
                </div>
                <div class="gsap-fade-up" style="transition-delay: 300ms;">
                    <h4 class="text-4xl font-bold text-slate-900 mb-1 counter" data-target="10">0</h4>
                    <p class="text-slate-500 font-medium text-sm uppercase tracking-wide">University Partners</p>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="py-20 bg-brandbg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 gsap-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Why Choose Online Degree?</h2>
                <p class="text-slate-600 text-lg">Experience premium education with the flexibility to balance your work, life, and studies seamlessly.</p>
            </div>
           
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="clock" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Learn Anytime, Anywhere</h3>
                    <p class="text-slate-600">Access your coursework 24/7. Study at your own pace from the comfort of your home or on the go.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="briefcase" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Study While Working</h3>
                    <p class="text-slate-600">Designed for working professionals. Upgrade your qualifications without leaving your current job.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="wallet" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Affordable Fees & EMI</h3>
                    <p class="text-slate-600">Get a premium degree at a fraction of on-campus costs. Easy, no-cost EMI options available.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Expert Faculty</h3>
                    <p class="text-slate-600">Learn from top-tier university professors and industry leaders with decades of real-world experience.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="trending-up" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Placement Assistance</h3>
                    <p class="text-slate-600">Dedicated career support, resume building, interview prep, and access to an exclusive job portal.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 gsap-fade-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="video" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Live + Recorded Classes</h3>
                    <p class="text-slate-600">Attend interactive live sessions on weekends, and access high-quality recorded lectures anytime.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- 5. Programs -->
    <section id="programs" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 gsap-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Top Ranked Degree Programs</h2>
                <p class="text-slate-600 text-lg">Choose from our industry-aligned undergraduate and postgraduate degrees.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Program Cards Array -->
                <?php
                $programs = [
                    ['title' => 'Online MBA', 'duration' => '2 Years', 'eligibility' => 'Graduation', 'type' => 'Post Graduate'],
                    ['title' => 'Online MCA', 'duration' => '2 Years', 'eligibility' => 'BCA / BSc IT', 'type' => 'Post Graduate'],
                    ['title' => 'Online BBA', 'duration' => '3 Years', 'eligibility' => '12th Pass', 'type' => 'Under Graduate'],
                    ['title' => 'Online BCA', 'duration' => '3 Years', 'eligibility' => '12th Pass', 'type' => 'Under Graduate'],
                    ['title' => 'Online MCom', 'duration' => '2 Years', 'eligibility' => 'BCom / BBA', 'type' => 'Post Graduate'],
                    ['title' => 'Online BCom', 'duration' => '3 Years', 'eligibility' => '12th Pass', 'type' => 'Under Graduate'],
                    ['title' => 'Online MA', 'duration' => '2 Years', 'eligibility' => 'Graduation', 'type' => 'Post Graduate'],
                    ['title' => 'Online BA', 'duration' => '3 Years', 'eligibility' => '12th Pass', 'type' => 'Under Graduate']
                ];
                
                foreach ($programs as $prog) {
                    echo '
                    <div class="group bg-brandbg rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:bg-blue-50/50 transition-all duration-300 gsap-fade-up">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-blue-100 text-primary text-xs font-semibold rounded-full mb-3">'.$prog['type'].'</span>
                            <h3 class="text-2xl font-bold text-slate-900 group-hover:text-primary transition">'.$prog['title'].'</h3>
                        </div>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-slate-600 gap-2"><i data-lucide="calendar" class="w-4 h-4 text-slate-400"></i> Duration: '.$prog['duration'].'</li>
                            <li class="flex items-center text-sm text-slate-600 gap-2"><i data-lucide="check-square" class="w-4 h-4 text-slate-400"></i> Eligibility: '.$prog['eligibility'].'</li>
                        </ul>
                        <!-- Modal Trigger Button -->
                        <button type="button" data-program="'.$prog['title'].'" class="open-modal-btn block w-full text-center bg-white border border-slate-200 text-slate-700 font-medium py-2.5 rounded-lg group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all">Apply Now</button>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brandbg border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 gsap-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Simple Admission Process</h2>
                <p class="text-slate-600 text-lg">Your journey to a successful career starts with these 5 simple steps.</p>
            </div>
           
            <div class="relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-200 -translate-y-1/2 z-0"></div>
               
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8 relative z-10">
                    <?php
                    $steps = [
                        ['icon' => 'file-text', 'title' => 'Fill Form', 'desc' => 'Submit details'],
                        ['icon' => 'phone-call', 'title' => 'Counselling', 'desc' => 'Free expert guidance'],
                        ['icon' => 'file-check-2', 'title' => 'Verification', 'desc' => 'Upload documents'],
                        ['icon' => 'check-circle', 'title' => 'Admission', 'desc' => 'Pay fees & enroll'],
                        ['icon' => 'laptop', 'title' => 'Start Learning', 'desc' => 'Access LMS portal']
                    ];
                   
                    foreach($steps as $index => $step) {
                        $num = $index + 1;
                        echo '
                        <div class="text-center gsap-fade-up">
                            <div class="w-16 h-16 mx-auto bg-white border-4 border-slate-100 rounded-full flex items-center justify-center text-primary shadow-lg mb-4 relative">
                                <i data-lucide="'.$step['icon'].'" class="w-6 h-6"></i>
                                <span class="absolute -top-2 -right-2 w-6 h-6 bg-slate-800 text-white text-xs font-bold rounded-full flex items-center justify-center">'.$num.'</span>
                            </div>
                            <h4 class="font-bold text-slate-900 text-lg">'.$step['title'].'</h4>
                            <p class="text-sm text-slate-500 mt-1">'.$step['desc'].'</p>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative gsap-fade-up">
                    <div class="absolute inset-0 bg-primary/10 rounded-3xl transform -rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Students Learning" class="relative rounded-3xl shadow-xl w-full object-cover h-[500px]">
                   
                    <div class="absolute bottom-8 -left-8 bg-white p-4 rounded-xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce-slow">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                            <i data-lucide="award" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-slate-900">#1</p>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wide">Trusted Platform</p>
                        </div>
                    </div>
                </div>
               
                <div class="gsap-fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Empowering Your Future with Quality Education</h2>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                        We partner with India's top universities to bring you UGC-entitled degrees that hold the exact same value as regular campus programs.
                    </p>
                   
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-primary flex-shrink-0">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">100% Valid UGC Degree</h4>
                                <p class="text-slate-500 text-sm mt-1">Recognized globally for jobs and higher education.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-primary flex-shrink-0">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Industry-Ready Curriculum</h4>
                                <p class="text-slate-500 text-sm mt-1">Syllabus designed by industry experts and academic stalwarts.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center text-primary flex-shrink-0">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Robust Career Support</h4>
                                <p class="text-slate-500 text-sm mt-1">Dedicated placement cell with 500+ hiring partners.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-20 bg-brandbg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 gsap-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Student Success Stories</h2>
                <p class="text-slate-600 text-lg">Hear from our alumni who transformed their careers.</p>
            </div>
           
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 gsap-fade-up">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    </div>
                    <p class="text-slate-600 italic mb-6">"The Online MBA program gave me the flexibility to study while managing my full-time job. The curriculum was highly relevant, and I got a 40% salary hike post-completion."</p>
                    <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?img=11" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Rahul Sharma</h4>
                            <p class="text-xs text-slate-500">Online MBA Alumni</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 gsap-fade-up">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    </div>
                    <p class="text-slate-600 italic mb-6">"Excellent faculty and seamless LMS platform. The recorded lectures helped me revise concepts easily. I highly recommend this to anyone looking to upgrade skills."</p>
                    <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?img=5" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Priya Singh</h4>
                            <p class="text-xs text-slate-500">Online MCA Alumni</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 gsap-fade-up">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i><i data-lucide="star" class="w-5 h-5 fill-current"></i>
                    </div>
                    <p class="text-slate-600 italic mb-6">"The placement support is real. The career cell guided me with mock interviews and resume building, landing me a job in a top MNC right after my final exams."</p>
                    <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                        <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?img=12" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Amit Patel</h4>
                            <p class="text-xs text-slate-500">Online BBA Alumni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 gsap-fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Frequently Asked Questions</h2>
            </div>
           
            <div class="space-y-4">
                <div class="border border-slate-200 rounded-xl overflow-hidden bg-white gsap-fade-up faq-item">
                    <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center focus:outline-none faq-btn">
                        <span>Is the Online Degree valid for Govt. Jobs?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-slate-600">
                        Yes, absolutely. As per the UGC mandate, online degrees from entitled universities hold the exact same value as regular campus degrees and are fully valid for government jobs, higher education, and private sector roles.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden bg-white gsap-fade-up faq-item">
                    <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center focus:outline-none faq-btn">
                        <span>Can I study while working full-time?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-slate-600">
                        Yes! Our programs are specifically designed for working professionals. You get 24/7 access to recorded lectures and study materials, allowing you to learn at your own pace.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden bg-white gsap-fade-up faq-item">
                    <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center focus:outline-none faq-btn">
                        <span>Do you provide placement assistance?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-slate-600">
                        Yes, we have a dedicated placement cell. We provide resume-building workshops, mock interviews, and access to a job portal featuring 500+ top hiring partners across India.
                    </div>
                </div>
                <div class="border border-slate-200 rounded-xl overflow-hidden bg-white gsap-fade-up faq-item">
                    <button class="w-full px-6 py-4 text-left font-bold text-slate-900 flex justify-between items-center focus:outline-none faq-btn">
                        <span>Are there EMI options available?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-slate-600">
                        Yes, we offer flexible, no-cost EMI options ranging from 3 to 12 months to ensure that quality education remains affordable for everyone.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-primary to-secondary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
       
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 gsap-fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Accelerate Your Career?</h2>
            <p class="text-blue-100 text-lg mb-10">Admissions are open for the upcoming batch. Secure your seat today.</p>
           <div class="flex flex-wrap justify-center gap-4">
    <a href="#apply" class="bg-white text-primary px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition shadow-xl text-lg flex items-center gap-2">
        Apply Now <i data-lucide="arrow-right" class="w-5 h-5"></i>
    </a>
    <a href="tel:+919876543210" class="bg-transparent border border-white/30 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition text-lg flex items-center gap-2">
        <i data-lucide="phone-call" class="w-5 h-5"></i> Call Now
    </a>
    <a href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20know%20more%20about%20the%20Online%20Degree%20programs." target="_blank" rel="noopener noreferrer" class="bg-green-500 border border-green-500 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-600 transition text-lg flex items-center gap-2">
        <i data-lucide="message-circle" class="w-5 h-5"></i> WhatsApp
    </a>
</div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
                            <i data-lucide="graduation-cap" class="text-white w-5 h-5"></i>
                        </div>
                        <span class="font-bold text-xl text-white">EduDegree</span>
                    </div>
                    <p class="text-sm max-w-sm mb-6">Empowering professionals and students with world-class, UGC-recognized online degree programs.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-white transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                        <a href="#" class="text-slate-400 hover:text-white transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                        <a href="#" class="text-slate-400 hover:text-white transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                        <a href="#" class="text-slate-400 hover:text-white transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    </div>
                </div>
               
                <div>
                    <h4 class="text-white font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#home" class="hover:text-primary transition">Home</a></li>
                        <li><a href="#programs" class="hover:text-primary transition">Programs</a></li>
                        <li><a href="#benefits" class="hover:text-primary transition">Why Choose Us</a></li>
                        <li><a href="#faq" class="hover:text-primary transition">FAQ</a></li>
                    </ul>
                </div>
               
                <div>
                    <h4 class="text-white font-bold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition">Refund Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-sm text-center">
                <p>&copy; <?php echo date('Y'); ?> EduDegree. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="assets/js/main.js"></script>

    <!-- Admission Popup Modal -->
    <div id="admissionModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 sm:p-0">
        <!-- Dark Backdrop with blur -->
        <div id="modalBackdrop" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 cursor-pointer"></div>
        
        <!-- Glassmorphism Modal Content -->
        <div id="modalContent" class="relative w-full max-w-lg transform scale-95 opacity-0 transition-all duration-300">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary to-accent transform rotate-2 rounded-2xl opacity-20"></div>
            <div class="relative bg-white/95 backdrop-blur-xl border border-white p-8 rounded-2xl shadow-2xl">
                
                <!-- Close Button -->
                <button id="closeModalBtn" class="absolute top-4 right-4 text-slate-400 hover:text-slate-800 bg-slate-100 hover:bg-slate-200 rounded-full p-2 transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>

                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-slate-900">Check Your Eligibility</h3>
                    <p class="text-slate-500 text-sm mt-1">Get free counselling for your preferred program</p>
                </div>
                
                <form id="modalAdmissionForm" class="space-y-4">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    
                    <div>
                        <input type="text" name="full_name" required placeholder="Full Name*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="tel" name="mobile" required pattern="[0-9]{10}" placeholder="Mobile Number*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        <input type="email" name="email" required placeholder="Email Address*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="city" required placeholder="City*" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                        <select name="highest_qualification" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                            <option value="">Highest Qualification*</option>
                            <option value="12th Pass">12th Pass</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post Graduate">Post Graduate</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <select name="work_experience" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                            <option value="">Work Experience*</option>
                            <option value="Fresher">Fresher (0 Years)</option>
                            <option value="1-3 Years">1-3 Years</option>
                            <option value="3-5 Years">3-5 Years</option>
                            <option value="5+ Years">5+ Years</option>
                        </select>
                        <select id="modalProgramSelect" name="preferred_program" required class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition text-slate-600">
                            <option value="">Preferred Program*</option>
                            <option value="Online MBA">Online MBA</option>
                            <option value="Online MCA">Online MCA</option>
                            <option value="Online MCom">Online MCom</option>
                            <option value="Online MA">Online MA</option>
                            <option value="Online BBA">Online BBA</option>
                            <option value="Online BCA">Online BCA</option>
                            <option value="Online BCom">Online BCom</option>
                            <option value="Online BA">Online BA</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary hover:from-blue-700 hover:to-blue-600 text-white font-semibold py-4 rounded-xl transition shadow-lg flex items-center justify-center gap-2 mt-2 form-submit-btn">
                        <span class="btn-text">Submit Application</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 btn-icon"></i>
                        <svg class="btn-spinner animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html> 