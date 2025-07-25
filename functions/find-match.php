<?php
function render_find_match() {
    ob_start();
?>
<div id="findMatch">
    <!-- Specialization -->
    <div class="container specialization-container">
        <h3 class="heading">Select a Specialization</h3>
        <p class="sub-heading">Choose the general role you're looking for</p>
        <div class="options specialization">
            <a href="javascript:void()" class="option specialization">Data Analyst</a>
            <a href="javascript:void()" class="option specialization">Business Analyst</a>
            <a href="javascript:void()" class="option specialization">BI Specialist</a>
            <a href="javascript:void()" class="option specialization">Data Scientist</a>
            <a href="javascript:void()" class="option specialization">Data Engineer</a>
            <a href="javascript:void()" class="option specialization">Information Analyst</a>
        </div>
    </div>

    <!-- Sub Role -->
    <div class="container subrole-container">
        <h3 class="heading">Select a Sub Role</h3>
        <p class="sub-heading">Refine the role with a more specific specialization</p>
        <div class="options subrole"></div>
        <button class="button back-button">Back</button>
    </div>

    <!-- Languages & Tools -->
    <div class="container tools-container">
        <h3 class="heading">Select Languages & Tools</h3>
        <p class="sub-heading">Select one or more technical skills or tools</p>
        <div class="options tools multi-select">
            <?php
            $tools = ["SQL", "Python", "R", "Power BI", "Tableau", "Excel", "Google Data Studio", "scikit-learn", "TensorFlow", "Apache Airflow", "Snowflake", "Azure / AWS / GCP", "Git"];
            foreach ($tools as $tool) {
                echo "<a href='javascript:void()' class='option tool'>$tool</a>";
            }
            ?>
        </div>
        <button class="button back-button">Back</button>
    </div>

    <!-- Experience -->
    <div class="container experience-container">
        <h3 class="heading">Select Experience Level</h3>
        <p class="sub-heading">Choose the desired experience range</p>
        <div class="options experience">
            <a href="javascript:void()" class="option experience">Junior (0–2 years)</a>
            <a href="javascript:void()" class="option experience">Mid-level (3–5 years)</a>
            <a href="javascript:void()" class="option experience">Senior (6+ years)</a>
        </div>
        <button class="button back-button">Back</button>
    </div>

    <!-- Availability -->
    <div class="container availability-container">
        <h3 class="heading">Select Availability</h3>
        <p class="sub-heading">Select the type of availability the candidate is looking for</p>
        <div class="options availability">
            <a href="javascript:void()" class="option availability">Full-time</a>
            <a href="javascript:void()" class="option availability">Part-time</a>
            <a href="javascript:void()" class="option availability">Freelancer</a>
            <a href="javascript:void()" class="option availability">Traineeship</a>
            <a href="javascript:void()" class="option availability">Internship</a>
        </div>
        <button class="button back-button">Back</button>
    </div>

    <!-- Sector -->
    <div class="container sector-container">
        <h3 class="heading">Select Sector</h3>
        <p class="sub-heading">Select industry experience or preference</p>
        <div class="options sector">
            <a href="javascript:void()" class="option sector">Finance</a>
            <a href="javascript:void()" class="option sector">Healthcare</a>
            <a href="javascript:void()" class="option sector">Government</a>
            <a href="javascript:void()" class="option sector">Retail & E-commerce</a>
            <a href="javascript:void()" class="option sector">Logistics</a>
            <a href="javascript:void()" class="option sector">Technology & IT</a>
            <a href="javascript:void()" class="option sector">Energy</a>
            <a href="javascript:void()" class="option sector">Education</a>
            <a href="javascript:void()" class="option sector">Consulting</a>
            <a href="javascript:void()" class="option sector">Other / Not Relevant</a>
        </div>
        <button class="button back-button">Back</button>
    </div>

    <!-- Recruiter -->
    <div class="container recruiter-container">
        <h3 class="heading">Your Details</h3>
        <p class="sub-heading">Please provide your contact information</p>
        <form class="form recruiter-form">
            <div class="form-group">
                <label for="recruiter-name">Your Name <span class="required">*</span></label>
                <input type="text" id="recruiter-name" name="recruiter-name" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="recruiter-email">Your Email <span class="required">*</span></label>
                <input type="email" id="recruiter-email" name="recruiter-email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="recruiter-phone">Your Phone</label>
                <input type="tel" id="recruiter-phone" name="recruiter-phone" placeholder="Enter your phone number">
            </div>
            <div class="button-group">
                <button type="button" class="button back-button">Back</button>
                <button type="button" class="button find-button">Find My Match</button>
            </div>
        </form>
    </div>

    <!-- Loading -->
    <div class="container loading-container">
        <h3 class="heading">Finding your match...</h3>
    </div>

    <!-- Matches -->
    <div class="container match-container">
        <h3 class="heading match-heading">Matches Found</h3>
        <div class="match-cards"></div>
    </div>

    <!-- Contact Form Container -->
    <div class="container contact-form-container">
        <h3 class="heading">Recruiter Contact Form</h3>
        <form class="form contact-form">
            <div class="form-group">
                <label for="contact-recruiter-name">Your Name <span class="required">*</span></label>
                <input type="text" id="contact-recruiter-name" name="contact-recruiter-name"
                    placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="contact-company-name">Company Name <span class="required">*</span></label>
                <input type="text" id="contact-company-name" name="contact-company-name"
                    placeholder="Enter your company name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">Your Email Address <span class="required">*</span></label>
                <input type="email" id="contact-email" name="contact-email" placeholder="e.g., you@example.com"
                    required>
            </div>
            <div class="form-group">
                <label for="contact-phone">Phone Number</label>
                <input type="tel" id="contact-phone" name="contact-phone" placeholder="e.g., +1234567890">
            </div>
            <div class="form-group">
                <label for="contact-role">Candidate Role</label>
                <input type="text" id="contact-role" name="contact-role" placeholder="Candidate Role" readonly>
            </div>
            <div class="form-group">
                <label for="contact-message">Message / Why You're Interested <span class="required">*</span></label>
                <textarea id="contact-message" name="contact-message"
                    placeholder="Briefly explain your interest in this candidate" required></textarea>
            </div>
            <div class="form-group">
                <label for="contact-urgency">How urgent is this need? <span class="required">*</span></label>
                <select id="contact-urgency" name="contact-urgency" required>
                    <option value="" disabled selected>Select urgency level</option>
                    <option>Immediate</option>
                    <option>Within 1 week</option>
                    <option>Flexible</option>
                </select>
            </div>
            <div class="form-group">
                <label>Preferred Contact Method <span class="required">*</span></label>
                <select id="contact-method" name="contact-method" required>
                    <option value="" disabled selected>Select preferred contact method</option>
                    <option>Email</option>
                    <option>Phone</option>
                    <option>Either</option>
                </select>
            </div>
            <div class="form-group consent-group">
                <input type="checkbox" id="contact-consent" required>
                <label for="contact-consent">I agree to be contacted and that this message will be sent to the platform
                    admin.</label>
            </div>
            <div class="button-group">
                <button type="button" class="button back-button">Back</button>
                <button type="submit" class="button submit-button">Send Request</button>
            </div>
        </form>
        <!-- New loader to show after clicking the Request button -->
        <div class="loader-message" style="display:none;">
            <p>📤 Sending your request. Please wait a moment...</p>
        </div>
        <div class="confirmation-message" style="display:none;">
            <p>✅ Thank you! Your message has been delivered. The admin will contact you shortly.</p>
        </div>
    </div>

</div>

<?php
$ajax_url = admin_url('admin-ajax.php');
$theme_url = get_template_directory_uri();
?>

<script>
// Blur-based inline validation
document.querySelectorAll('input, textarea, select').forEach(field => {
    field.addEventListener('blur', () => {
        if (field.hasAttribute('required') && !field.value.trim()) {
            showError(field, 'This field is required');
        } else if (field.type === 'email' && !validateEmail(field.value.trim())) {
            showError(field, 'Invalid email format');
        } else if (field.type === 'tel' && field.value.trim() && !validatePhone(field.value.trim())) {
            showError(field, 'Invalid phone number');
        } else {
            clearError(field);
        }
    });
});

// Email validation
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

// Phone validation
function validatePhone(phone) {
    // Basic international number validation
    const regex = /^\+?[0-9\s\-()]{7,20}$/;
    return phone === '' || regex.test(phone);
}

// Show error message
function showError(input, message) {
    let error = input.parentElement.querySelector('.error-message');
    if (!error) {
        error = document.createElement('div');
        error.className = 'error-message';
        input.parentElement.appendChild(error);
    }
    error.textContent = message;
    input.classList.add('input-error');
}

// Clear error message
function clearError(input) {
    let error = input.parentElement.querySelector('.error-message');
    if (error) error.textContent = '';
    input.classList.remove('input-error');
}

// Generate consistent background color from a string
function stringToColor(str) {
    let hash = 0;
    for (let i = 0; i < str.length; i++) {
        hash = str.charCodeAt(i) + ((hash << 5) - hash);
    }
    const color = `hsl(${hash % 360}, 70%, 60%)`; // nice pastel range
    return color;
}

// Obfuscate last name like "W**H"
function obfuscateLastName(name = "") {
    if (!name || name.length < 2) return "*";
    return `${name.charAt(0).toUpperCase()}**${name.charAt(name.length - 1).toUpperCase()}`;
}

// Function to return the flag emojis based on languages
function getLanguageFlag(languages) {
    const languageFlags = {
        "English": "🇬🇧",
        "Dutch": "🇳🇱",
        "Spanish": "🇪🇸",
        "French": "🇫🇷",
        "German": "🇩🇪",
        "Italian": "🇮🇹",
        "Portuguese": "🇵🇹",
        "Russian": "🇷🇺",
        "Chinese": "🇨🇳",
        "Japanese": "🇯🇵",
        "Arabic": "🇸🇦",
        "Hindi": "🇮🇳",
        "Swedish": "🇸🇪",
        "Turkish": "🇹🇷",
        "Korean": "🇰🇷",
        "Finnish": "🇫🇮",
        "Polish": "🇵🇱",
        "Czech": "🇨🇿",
        "Danish": "🇩🇰",
        "Norwegian": "🇳🇴",
        "Greek": "🇬🇷",
        "Hungarian": "🇭🇺",
        "Romanian": "🇷🇴",
        "Bulgarian": "🇧🇬",
        "Ukrainian": "🇺🇦",
        "Hebrew": "🇮🇱",
        "Malay": "🇲🇾",
        "Thai": "🇹🇭",
        "Vietnamese": "🇻🇳",
        "Indonesian": "🇮🇩",
        "Filipino": "🇵🇭",
        "Swahili": "🇿🇦",
        "Persian": "🇮🇷",
        "Tamil": "🇮🇳",
        "Bengali": "🇧🇩",
        "Gujarati": "🇮🇳",
        "Punjabi": "🇮🇳",
        "Marathi": "🇮🇳",
        "Urdu": "🇵🇰",
        "Malayalam": "🇮🇳",
        "Telugu": "🇮🇳",
        "Kannada": "🇮🇳",
        "Nepali": "🇳🇵",
        "Sinhala": "🇱🇰",
        "Pashto": "🇦🇫",
        "Khmer": "🇰🇭",
        "Lao": "🇱🇸",
        "Georgian": "🇬🇪",
        "Albanian": "🇦🇱",
        "Serbian": "🇷🇸",
        "Croatian": "🇭🇷",
        "Bosnian": "🇧🇦",
        "Slovak": "🇸🇰",
        "Estonian": "🇪🇪",
        "Latvian": "🇱🇻",
        "Lithuanian": "🇱🇹",
        "Icelandic": "🇮🇸",
        "Maltese": "🇲🇹",
        "Armenian": "🇦🇲",
        "Azerbaijani": "🇦🇿",
        "Kazakh": "🇰🇿",
        "Uzbek": "🇺🇿",
        "Tajik": "🇹🇯",
        "Kyrgyz": "🇰🇬",
        "Turkmen": "🇹🇲",
        "Mongolian": "🇲🇳",
        "Burmese": "🇲🇲",
        "Nepali": "🇳🇵",
        "Tigrinya": "🇪🇷",
        "Somali": "🇸🇴",
        "Haitian Creole": "🇭🇹",
        "Catalan": "🇪🇸",
        "Basque": "🇪🇸",
        "Galician": "🇪🇸",
        "Scottish Gaelic": "🇬🇧",
        "Irish": "🇮🇪",
        "Welsh": "🇬🇧",
        "Breton": "🇫🇷",
        "Corsican": "🇫🇷",
        "Sicilian": "🇮🇹",
        "Esperanto": "🇪🇺",
        "Latin": "🇻🇦",
        "Yiddish": "🇮🇱"
    };

    const flags = languages.split(',').map(language => language.trim())
        .map(language => languageFlags[language] || ''); // return the respective flag emoji
    return flags;
}

document.addEventListener("DOMContentLoaded", function() {
    const ajaxUrl = "<?php echo esc_url($ajax_url); ?>";
    const fallbackImage = "<?php echo esc_url($theme_url . '/assets/media/user.png'); ?>";

    const steps = [
        ".specialization-container",
        ".subrole-container",
        ".tools-container",
        ".experience-container",
        ".availability-container",
        ".sector-container",
        ".recruiter-container",
        ".loading-container",
        ".match-container",
        ".contact-form-container"
    ];

    const subrolesMap = {
        "Data Analyst": ["Reporting Analyst", "Marketing Data Analyst", "Customer Insights Analyst",
            "Financial Data Analyst", "Operations Analyst", "Supply Chain Analyst",
            "Statistical Analyst"
        ],
        "Business Analyst": ["Process Analyst", "Change Analyst", "Functional Business Analyst",
            "Business Process Analyst"
        ],
        "BI Specialist": ["BI Analyst", "BI Developer", "Power BI Specialist", "Tableau Specialist",
            "Dashboard Specialist", "Data Visualization Specialist"
        ],
        "Data Scientist": ["Predictive Analytics Specialist", "Machine Learning Engineer", "AI Engineer",
            "NLP Specialist", "Quantitative Analyst"
        ],
        "Data Engineer": ["ETL Developer", "Analytics Engineer", "Data Platform Engineer",
            "Data Integration Specialist", "Data Architect", "Data Quality Analyst", "Data Steward"
        ],
        "Information Analyst": ["Functional Analyst", "Technical Analyst", "Systems Analyst",
            "Application Analyst", "Requirements Analyst"
        ]
    };

    let currentStep = 0;
    const selections = {
        tools: []
    };

    function showStep(index) {
        steps.forEach((step, i) => {
            const el = document.querySelector(step);
            if (el) el.classList.toggle('active', i === index);
        });

        const stepKey = steps[index].replace('.', '').replace('-container', '');
        highlightSelectedOptions(stepKey);

        if (steps[index] === ".loading-container") {
            setTimeout(() => {
                currentStep++;
                showStep(currentStep);
            }, 2000);
        }
    }

    function highlightSelectedOptions(key) {
        const container = document.querySelector(`.${key}-container`);
        if (!container) return;

        container.querySelectorAll(".option").forEach(option => {
            const val = option.textContent.trim();
            if (key === "tools") {
                option.classList.toggle("selected", selections.tools.includes(val));
            } else {
                option.classList.toggle("selected", selections[key] === val);
            }
        });
    }

    function goToNextStep() {
        currentStep++;
        showStep(currentStep);
    }

    showStep(currentStep);

    document.querySelectorAll(".specialization-container .option").forEach(option => {
        option.addEventListener("click", function() {
            selections.specialization = this.textContent.trim();

            const subroleContainer = document.querySelector(".subrole");
            subroleContainer.innerHTML = subrolesMap[selections.specialization]
                .map(role => `<a href="javascript:void()" class="option subrole">${role}</a>`)
                .join("");

            goToNextStep();

            setTimeout(() => {
                document.querySelectorAll(".subrole-container .option").forEach(
                    subrole => {
                        subrole.addEventListener("click", function() {
                            selections.subrole = this.textContent.trim();
                            goToNextStep();
                        });
                    });
            }, 100);
        });
    });

    // Handle Tools multi-select
    document.querySelectorAll(".tools-container .option").forEach(option => {
        option.addEventListener("click", function() {
            const val = this.textContent.trim();
            if (selections.tools.includes(val)) {
                selections.tools = selections.tools.filter(t => t !== val);
                this.classList.remove("selected");
            } else {
                selections.tools.push(val);
                this.classList.add("selected");
            }
        });
    });

    // Add a "Next" button for tools step
    const nextButton = document.createElement("button");
    nextButton.textContent = "Next";
    nextButton.className = "button next-button";
    nextButton.addEventListener("click", function() {
        goToNextStep();
    });
    document.querySelector(".tools-container").appendChild(nextButton);

    // Handle generic steps
    steps.forEach((step, index) => {
        const container = document.querySelector(step);
        if (!container) return;

        const options = container.querySelectorAll(
            ".option:not(.tool):not(.subrole):not(.specialization)");
        options.forEach(option => {
            option.addEventListener("click", function() {
                const val = this.textContent.trim();
                const key = step.replace('.', '').replace('-container', '');
                selections[key] = val;
                goToNextStep();
            });
        });

        const backButton = container.querySelector(".back-button");
        if (backButton) {
            backButton.addEventListener("click", function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        }
    });

    // Handle "Find My Match" click
    const findButton = document.querySelector(".recruiter-container .find-button");
    if (findButton) {
        findButton.addEventListener("click", function() {
            const nameInput = document.getElementById("recruiter-name");
            const emailInput = document.getElementById("recruiter-email");
            const phoneInput = document.getElementById("recruiter-phone");

            let valid = true;

            if (!nameInput.value.trim()) {
                showError(nameInput, "Name is required");
                valid = false;
            } else {
                clearError(nameInput);
            }

            if (!emailInput.value.trim()) {
                showError(emailInput, "Email is required");
                valid = false;
            } else if (!validateEmail(emailInput.value.trim())) {
                showError(emailInput, "Invalid email format");
                valid = false;
            } else {
                clearError(emailInput);
            }

            if (phoneInput.value && !validatePhone(phoneInput.value.trim())) {
                showError(phoneInput, "Invalid phone number");
                valid = false;
            } else {
                clearError(phoneInput);
            }

            if (!valid) return;

            const name = nameInput.value.trim();
            const email = emailInput.value.trim();

            // Validate Name and Email
            if (!name || !email) {
                alert("Please enter your name and email to find your match.");
                if (!name) nameInput.focus();
                else emailInput.focus();
                return;
            }

            selections.recruiter = {
                name,
                email,
                phone: document.getElementById("recruiter-phone").value.trim(),
            };

            // Show loading
            currentStep++;
            showStep(currentStep);

            // Send AJAX request to find candidates
            fetch(ajaxUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: new URLSearchParams({
                        action: "find_best_candidates",
                        data: JSON.stringify(selections),
                    }),
                })
                .then((res) => res.json())
                .then((candidates) => {
                    const container = document.querySelector(".match-cards");
                    container.innerHTML = ""; // Clear previous matches

                    // update dynamic heading
                    document.querySelector(".match-heading").textContent =
                        `${candidates.length} Match${candidates.length !== 1 ? "es" : ""} Found`;

                    if (candidates.length === 0) {
                        container.innerHTML =
                            "<p class='no-match'>No matching candidates found.</p>";
                    } else {
                        candidates.forEach((candidate) => {
                            const card = `
        <div class="card" data-id="${candidate.id}" data-candidate='${encodeURIComponent(JSON.stringify(candidate))}'>
            <div class="row head">
                <div class="col">
                    <div class="avatar-container">
                        <div class="avatar" style="background-color: ${stringToColor(candidate.first_name)};">
                            ${candidate.first_name?.charAt(0).toUpperCase() || ''}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4 class="name">${candidate.first_name} ${obfuscateLastName(candidate.last_name)}</h4>
                    <p class="specialization">${candidate.specialization}</p>
                    <div class="flags">
                        ${getLanguageFlag(candidate.languages).join('')}
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="tools">
                    ${candidate.lang_tools?.split(',').map(tool => `<span class="tool">${tool.trim()}</span>`).join('') || ''}
                </div>
                <p class="bio">${candidate.bio || 'No bio available.'}</p>
                <p><strong>Sub Role:</strong> ${candidate.sub_role}</p>
                <p><strong>Experience:</strong> ${candidate.experience}</p>
                <p><strong>Availability:</strong> ${candidate.availability}</p>
                <p><strong>Sector:</strong> ${candidate.sector}</p>
            </div>
            <div class="footer">
                <button class="button">Contact Analyst</button>
            </div>
        </div>`;
                            container.innerHTML += card;
                        });

                        // Attach event to Contact Analyst buttons after loading matches
                        document.querySelectorAll(".match-container .card .footer .button").forEach(
                            button => {
                                button.addEventListener("click", function() {
                                    const card = this.closest('.card');
                                    const candidateData = JSON.parse(decodeURIComponent(
                                        card.getAttribute('data-candidate')));

                                    // Set the selected candidate's role in the contact form
                                    document.getElementById("contact-role").value =
                                        candidateData.sub_role;

                                    // Capture full candidate details
                                    selections.contactCandidateDetails = {
                                        id: candidateData.id,
                                        first_name: candidateData.first_name,
                                        last_name: candidateData.last_name,
                                        email: candidateData.email,
                                        phone: candidateData.phone,
                                        country: candidateData.country,
                                        specialization: candidateData
                                            .specialization,
                                        sub_role: candidateData
                                            .sub_role,
                                        experience: candidateData.experience,
                                        availability: candidateData.availability,
                                        sector: candidateData.sector,
                                        tools: candidateData.lang_tools?.split(',')
                                            .map(t => t.trim()) || [],
                                        bio: candidateData.bio,
                                    };

                                    currentStep++;
                                    showStep(currentStep);
                                });
                            });

                    }
                });
        });
    }

    // Form submission handling
    document.querySelector('.contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const form = event.target;
        const name = form["contact-recruiter-name"];
        const company = form["contact-company-name"];
        const email = form["contact-email"];
        const phone = form["contact-phone"];
        const message = form["contact-message"];
        const urgency = form["contact-urgency"];
        const method = form["contact-method"];
        const consent = document.getElementById("contact-consent");

        let valid = true;

        if (!name.value.trim()) {
            showError(name, "Name is required");
            valid = false;
        } else {
            clearError(name);
        }

        if (!company.value.trim()) {
            showError(company, "Company name is required");
            valid = false;
        } else {
            clearError(company);
        }

        if (!email.value.trim()) {
            showError(email, "Email is required");
            valid = false;
        } else if (!validateEmail(email.value.trim())) {
            showError(email, "Invalid email format");
            valid = false;
        } else {
            clearError(email);
        }

        if (phone.value && !validatePhone(phone.value.trim())) {
            showError(phone, "Invalid phone number");
            valid = false;
        } else {
            clearError(phone);
        }

        if (!message.value.trim()) {
            showError(message, "Message is required");
            valid = false;
        } else {
            clearError(message);
        }

        if (!urgency.value) {
            showError(urgency, "Select urgency");
            valid = false;
        } else {
            clearError(urgency);
        }

        if (!method.value) {
            showError(method, "Select contact method");
            valid = false;
        } else {
            clearError(method);
        }

        if (!consent.checked) {
            alert("You must agree to be contacted.");
            valid = false;
        }

        if (!valid) return;

        // Show loader and send AJAX request
        document.querySelector('.loader-message').style.display = 'block';
        document.querySelector('.contact-form').style.display = 'none';

        // Build formData
        const formData = {
            name: name.value.trim(),
            company: company.value.trim(),
            email: email.value.trim(),
            phone: phone.value.trim(),
            role: document.getElementById("contact-role").value.trim(),
            message: message.value.trim(),
            urgency: urgency.value,
            method: method.value,
            candidate: selections.contactCandidateDetails,
        };

        fetch(ajaxUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: new URLSearchParams({
                    action: "send_candidate_contact_request",
                    data: JSON.stringify(formData),
                }),
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    document.querySelector('.loader-message').style.display = 'none';
                    document.querySelector('.confirmation-message').style.display = 'block';
                } else {
                    alert("Failed to send message. Please try again later.");
                    document.querySelector('.loader-message').style.display = 'none';
                    document.querySelector('.contact-form').style.display = 'block';
                }
            })
            .catch(err => {
                console.error(err);
                alert("There was an error. Please try again later.");
                document.querySelector('.loader-message').style.display = 'none';
                document.querySelector('.contact-form').style.display = 'block';
            });
    });

    // Handle Back button in contact form
    document.querySelector('.contact-form-container .back-button').addEventListener('click', function() {
        currentStep--;
        showStep(currentStep);
    });

});
</script>

<?php
    return ob_get_clean();
}
add_shortcode('find_match', 'render_find_match');

// Finding candidates AJAX handler
add_action('wp_ajax_find_best_candidates', 'handle_find_best_candidates');
add_action('wp_ajax_nopriv_find_best_candidates', 'handle_find_best_candidates');

function handle_find_best_candidates() {
    global $wpdb;

    error_log("AJAX: find_best_candidates called");

    $raw_data = $_POST['data'] ?? '';
    error_log("Raw POST data: " . $raw_data);

    $selections = json_decode(stripslashes($raw_data), true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON decode error: " . json_last_error_msg());
        wp_send_json_error(["error" => "Invalid JSON"]);
    }

// Send recruiter form data to admin via email
$recruiter = $selections['recruiter'] ?? [];
$admin_email = get_option('admin_email');

if ($recruiter && $admin_email) {
    $subject = 'New Recruiter Match Request Received';

    $name = sanitize_text_field($recruiter['name'] ?? 'N/A');
    $email = sanitize_email($recruiter['email'] ?? 'N/A');
    $phone = sanitize_text_field($recruiter['phone'] ?? 'N/A');

    $specialization = sanitize_text_field($selections['specialization'] ?? 'N/A');
    $subrole = sanitize_text_field($selections['subrole'] ?? 'N/A');
    $experience = sanitize_text_field($selections['experience'] ?? 'N/A');
    $availability = sanitize_text_field($selections['availability'] ?? 'N/A');
    $sector = sanitize_text_field($selections['sector'] ?? 'N/A');
    $tools = !empty($selections['tools']) ? implode(', ', array_map('sanitize_text_field', $selections['tools'])) : 'None';

    $message = <<<EOT
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial, sans-serif; color: #333; }
    h2 { color: #2c3e50; }
    table { border-collapse: collapse; width: 100%; margin-top: 10px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
    th { background-color: #f5f5f5; }
  </style>
</head>
<body>
  <h2>New Match Request from Recruiter</h2>
  <p>Hello <strong>Admin</strong>,</p>
  <p>A recruiter has submitted a new match request. Please review the details below:</p>

  <h3>Recruiter Information:</h3>
  <table>
    <tr><th>Name</th><td>$name</td></tr>
    <tr><th>Email</th><td>$email</td></tr>
    <tr><th>Phone</th><td>$phone</td></tr>
  </table>

  <h3>Selections:</h3>
  <table>
    <tr><th>Specialization</th><td>$specialization</td></tr>
    <tr><th>Sub Role</th><td>$subrole</td></tr>
    <tr><th>Experience</th><td>$experience</td></tr>
    <tr><th>Availability</th><td>$availability</td></tr>
    <tr><th>Sector</th><td>$sector</td></tr>
    <tr><th>Tools</th><td>$tools</td></tr>
  </table>
  
</body>
</html>
EOT;

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
    ];

    wp_mail($admin_email, $subject, $message, $headers);
}

    error_log("Decoded selections: " . print_r($selections, true));

    $specialization = $selections['specialization'] ?? '';
    $sub_role = $selections['subrole'] ?? '';
    $experience = $selections['experience'] ?? '';
    $availability = $selections['availability'] ?? '';
    $sector = $selections['sector'] ?? '';
    $tools = $selections['tools'] ?? [];

    $table = $wpdb->prefix . "candidates";

    // Start query
    $query = "SELECT * FROM $table WHERE status = 'Public'";
    $params = [];

    if ($specialization) {
        $query .= " AND specialization = %s";
        $params[] = $specialization;
    }

    if ($sub_role) {
        $query .= " AND sub_role = %s";
        $params[] = $sub_role;
    }

    if ($experience) {
        $query .= " AND experience = %s";
        $params[] = $experience;
    }

    if ($availability) {
        $query .= " AND availability = %s";
        $params[] = $availability;
    }

    if ($sector) {
        $query .= " AND sector = %s";
        $params[] = $sector;
    }

    $query .= " ORDER BY updated_at DESC LIMIT 10";

    error_log("Prepared query: $query");
    error_log("With params: " . print_r($params, true));

    try {
        $results = $wpdb->get_results($wpdb->prepare($query, ...$params), ARRAY_A);
        error_log("DB results: " . print_r($results, true));
    } catch (Exception $e) {
        error_log("DB query error: " . $e->getMessage());
        wp_send_json_error(["error" => "Database error"]);
    }

    // exclude candidates with 0 matching tools
    $results = array_filter($results, function($candidate) use ($tools) {
        $candidateTools = array_map('trim', explode(',', $candidate['lang_tools'] ?? ''));
        return count(array_intersect($tools, $candidateTools)) > 0;
    });

    if (!$results) {
        error_log("No candidates found matching filters.");
        wp_send_json([]);
    }

    // Score based on tools
    foreach ($results as &$candidate) {
        $candidate_tools = explode(',', $candidate['lang_tools'] ?? '');
        $score = count(array_intersect(array_map('trim', $candidate_tools), $tools));
        $candidate['score'] = $score;
    }

    usort($results, fn($a, $b) => $b['score'] <=> $a['score']);
    wp_send_json($results);

}

// Contacct form AJAX handler
add_action('wp_ajax_send_candidate_contact_request', 'handle_send_candidate_contact_request');
add_action('wp_ajax_nopriv_send_candidate_contact_request', 'handle_send_candidate_contact_request');

function handle_send_candidate_contact_request() {
    $admin_email = get_option('admin_email');

    $data = $_POST['data'] ?? '';
    $decoded = json_decode(stripslashes($data), true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        wp_send_json_error(['error' => 'Invalid JSON']);
    }

    $name    = sanitize_text_field($decoded['name'] ?? 'N/A');
    $company = sanitize_text_field($decoded['company'] ?? 'N/A');
    $email   = sanitize_email($decoded['email'] ?? 'N/A');
    $phone   = sanitize_text_field($decoded['phone'] ?? 'N/A');
    $role    = sanitize_text_field($decoded['role'] ?? 'N/A');
    $message = sanitize_textarea_field($decoded['message'] ?? 'N/A');
    $urgency = sanitize_text_field($decoded['urgency'] ?? 'N/A');
    $method  = sanitize_text_field($decoded['method'] ?? 'N/A');

    $candidate = $decoded['candidate'] ?? [];

    $candidate_id = sanitize_text_field($candidate['id'] ?? 'N/A');
    $candidate_first_name = sanitize_text_field($candidate['first_name'] ?? '');
    $candidate_last_name = sanitize_text_field($candidate['last_name'] ?? '');
    $candidate_name = trim("$candidate_first_name $candidate_last_name") ?: 'N/A';
    $candidate_email = sanitize_email($candidate['email'] ?? 'N/A');
    $candidate_phone = sanitize_text_field($candidate['phone'] ?? 'N/A');
    $candidate_country = sanitize_text_field($candidate['country'] ?? 'N/A');
    $candidate_spec = sanitize_text_field($candidate['specialization'] ?? 'N/A');
    $candidate_subrole = sanitize_text_field($candidate['sub_role'] ?? 'N/A');
    $candidate_exp = sanitize_text_field($candidate['experience'] ?? 'N/A');
    $candidate_avail = sanitize_text_field($candidate['availability'] ?? 'N/A');
    $candidate_sector = sanitize_text_field($candidate['sector'] ?? 'N/A');
    $candidate_tools = is_array($candidate['tools']) ? implode(', ', array_map('sanitize_text_field', $candidate['tools'])) : 'N/A';
    $candidate_bio = sanitize_textarea_field($candidate['bio'] ?? 'N/A');

    $email_subject = "Recruiter Contact Request for Candidate ID: $candidate_id";

    $email_body = <<<EOT
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial, sans-serif; color: #333; }
    h2 { color: #2c3e50; }
    table { border-collapse: collapse; width: 100%; margin-top: 10px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: top; }
    th { background-color: #f2f2f2; width: 200px; }
    p { margin: 0 0 10px; }
  </style>
</head>
<body>
  <h2>Contact Request from Recruiter</h2>
  <p>Hello <strong>Admin</strong>,</p>
  <p><strong>Candidate ID:</strong> $candidate_id</p>

  <h3>Recruiter Details:</h3>
  <table>
    <tr><th>Name</th><td>$name</td></tr>
    <tr><th>Company</th><td>$company</td></tr>
    <tr><th>Email</th><td>$email</td></tr>
    <tr><th>Phone</th><td>$phone</td></tr>
    <tr><th>Urgency</th><td>$urgency</td></tr>
    <tr><th>Preferred Contact Method</th><td>$method</td></tr>
    <tr><th>Message</th><td>$message</td></tr>
  </table>

  <h3>Candidate Information:</h3>
  <table>
    <tr><th>Name</th><td>$candidate_name</td></tr>
    <tr><th>Email</th><td>$candidate_email</td></tr>
    <tr><th>Phone</th><td>$candidate_phone</td></tr>
    <tr><th>Country</th><td>$candidate_country</td></tr>
    <tr><th>Specialization</th><td>$candidate_spec</td></tr>
    <tr><th>Sub-role</th><td>$candidate_subrole</td></tr>
    <tr><th>Experience</th><td>$candidate_exp</td></tr>
    <tr><th>Availability</th><td>$candidate_avail</td></tr>
    <tr><th>Sector</th><td>$candidate_sector</td></tr>
    <tr><th>Tools</th><td>$candidate_tools</td></tr>
    <tr><th>Bio</th><td>$candidate_bio</td></tr>
  </table>

</body>
</html>
EOT;

    $headers = ['Content-Type: text/html; charset=UTF-8'];

    $success = wp_mail($admin_email, $email_subject, $email_body, $headers);

    if ($success) {
        wp_send_json_success(['message' => 'Request sent successfully.']);
    } else {
        wp_send_json_error(['error' => 'Failed to send email.']);
    }
}