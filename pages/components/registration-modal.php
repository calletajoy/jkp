<!-- Registration Modal -->
<div id="registrationModal" class="modal-overlay" style="display: none;">
    <div class="modal-container">
        <div class="modal-header">
            <h3>Register for Events</h3>
            <button class="modal-close" id="closeModal">&times;</button>
        </div>
        
        <div class="modal-body">
            <form id="registrationForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="organization">Organization *</label>
                    <input type="text" id="organization" name="organization" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Are you Kenyan? *</label>
                    <div class="nationality-options">
                        <div class="nationality-card" data-nationality="kenyan">
                            <div class="nationality-card-content">
                                <h4>Yes</h4>
                                <p>I am Kenyan</p>
                                <div class="tick-icon">✓</div>
                            </div>
                        </div>
                        <div class="nationality-card" data-nationality="non-kenyan">
                            <div class="nationality-card-content">
                                <h4>No</h4>
                                <p>I am from another country</p>
                                <div class="tick-icon">✓</div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="nationality" name="nationality" required>
                </div>
                
                <div class="form-group">
                    <label for="attendees">Number of Attendees *</label>
                    <input type="number" id="attendees" name="attendees" min="1" value="1" required>
                </div>
                
                <div class="form-group">
                    <label>Registering As *</label>
                    <div class="registration-cards">
                        <div class="reg-card" data-type="sponsor">
                            <div class="reg-card-content">
                                <h4>Sponsor</h4>
                                <p>Support and showcase your brand</p>
                                <div class="tick-icon">✓</div>
                            </div>
                        </div>
                        <div class="reg-card" data-type="exhibitor">
                            <div class="reg-card-content">
                                <h4>Exhibitor</h4>
                                <p>Showcase your products/services</p>
                                <div class="tick-icon">✓</div>
                            </div>
                        </div>
                        <div class="reg-card" data-type="supporter">
                            <div class="reg-card-content">
                                <h4>Supporter</h4>
                                <p>Join as a community supporter</p>
                                <div class="tick-icon">✓</div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="registeringAs" name="registeringAs" required>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn-cancel" id="cancelBtn">Cancel</button>
                    <button type="submit" class="btn-submit">Submit Registration</button>
                </div>
            </form>
            
            <div id="successMessage" style="display: none;" class="success-message">
                <p>✓ Registration Submitted Successfully!</p>
                <p>We will contact you shortly.</p>
            </div>
        </div>
    </div>
</div>

<style>
/* Modal Styles */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
}

.modal-container {
    background: white;
    border-radius: 24px;
    max-width: 700px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    padding: 24px 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    background: inherit;
    border-radius: 24px 24px 0 0;
    z-index: 1;
}

.modal-header h3 {
    margin: 0;
    font-size: 1.8rem;
    color: #00ced1;
    font-family: 'Playfair Display', serif;
}

.modal-close {
    background: none;
    border: none;
    font-size: 2rem;
    cursor: pointer;
    color: #273c67;
    transition: 0.2s;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-close:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: rotate(90deg);
}

.modal-body {
    padding: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #0b0b42;
    font-size: 0.9rem;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 12px;
    font-size: 1rem;
    background: rgba(255, 255, 255, 0.1);
    color: #00ced1;
    transition: 0.2s;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #00ced1;
    background: rgba(255, 255, 255, 0.15);
}

.form-group input::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* Nationality Options */
.nationality-options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-top: 10px;
}

.nationality-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 16px;
    padding: 20px 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
    position: relative;
}

.nationality-card:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}

.nationality-card.selected {
    background: #00ced1;
    border-color: #0b0b42;
}

.nationality-card.selected .nationality-card-content h4,
.nationality-card.selected .nationality-card-content p {
    color: #0b0b42;
}

.nationality-card.selected .tick-icon {
    display: flex;
}

.nationality-card-content h4 {
    margin: 0 0 8px 0;
    font-size: 1.2rem;
    color: white;
}

.nationality-card-content p {
    margin: 0;
    font-size: 0.8rem;
    color: #273c67;
}

/* Registration Cards */
.registration-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-top: 10px;
}

.reg-card {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 16px;
    padding: 20px 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
    position: relative;
}

.reg-card:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}

.reg-card.selected {
    background: #00ced1;
    border-color: #00ced1;
}

.reg-card.selected .reg-card-content h4,
.reg-card.selected .reg-card-content p {
    color: #0b0b42;
}

.reg-card.selected .tick-icon {
    display: flex;
}

.reg-card-content h4 {
    margin: 0 0 8px 0;
    font-size: 1.2rem;
    color: white;
}

.reg-card-content p {
    margin: 0;
    font-size: 0.8rem;
    color: #0b0b42;
}

.tick-icon {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
    width: 24px;
    height: 24px;
    background: #0b0b42;
    color: #00ced1;
    border-radius: 50%;
    font-size: 14px;
    font-weight: bold;
    align-items: center;
    justify-content: center;
}

.reg-card.selected .tick-icon,
.nationality-card.selected .tick-icon {
    display: flex;
}

/* Form Actions */
.form-actions {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.btn-cancel,
.btn-submit {
    padding: 12px 28px;
    border-radius: 40px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
    border: none;
}

.btn-cancel {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.btn-cancel:hover {
    background: rgba(255, 255, 255, 0.3);
}

.btn-submit {
    background: #00ced1;
    color: #0b0b42;
}

.btn-submit:hover {
    background: #5C7EC0;
    color: white;
    transform: translateY(-2px);
}

/* Success Message */
.success-message {
    text-align: center;
    padding: 40px 20px;
}

.success-message p {
    font-size: 1.2rem;
    color: #00ced1;
    margin: 10px 0;
}

.success-message p:first-child {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .nationality-options {
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .registration-cards {
        grid-template-columns: 1fr;
        gap: 10px;
    }
    
    .modal-header h3 {
        font-size: 1.4rem;
    }
    
    .modal-body {
        padding: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('registrationModal');
    const closeModalBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const registrationForm = document.getElementById('registrationForm');
    const successMessage = document.getElementById('successMessage');
    const regCards = document.querySelectorAll('.reg-card');
    const nationalityCards = document.querySelectorAll('.nationality-card');
    const registeringAsInput = document.getElementById('registeringAs');
    const nationalityInput = document.getElementById('nationality');
    
    let selectedType = null;
    let selectedNationality = null;
    
    // Nationality card selection
    nationalityCards.forEach(card => {
        card.addEventListener('click', function() {
            nationalityCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedNationality = this.getAttribute('data-nationality');
            nationalityInput.value = selectedNationality === 'kenyan' ? 'Kenyan' : 'Non-Kenyan';
        });
    });
    
    // Registration card selection
    regCards.forEach(card => {
        card.addEventListener('click', function() {
            regCards.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            selectedType = this.getAttribute('data-type');
            registeringAsInput.value = selectedType;
        });
    });
    
    // Close modal function
    function closeModal() {
        modal.style.display = 'none';
        registrationForm.reset();
        successMessage.style.display = 'none';
        registrationForm.style.display = 'block';
        regCards.forEach(c => c.classList.remove('selected'));
        nationalityCards.forEach(c => c.classList.remove('selected'));
        selectedType = null;
        selectedNationality = null;
        registeringAsInput.value = '';
        nationalityInput.value = '';
    }
    
    // Open modal
    window.openRegistrationModal = function() {
        modal.style.display = 'flex';
    };
    
    // Close modal events
    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Form submission
    registrationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!selectedType) {
            alert('Please select how you are registering (Sponsor, Exhibitor, or Supporter)');
            return;
        }
        
        if (!selectedNationality) {
            alert('Please select whether you are Kenyan or not');
            return;
        }
        
        const formData = new FormData(this);
        formData.append('registeringAs', selectedType);
        formData.append('nationality', selectedNationality === 'kenyan' ? 'Kenyan' : 'Non-Kenyan');
        
        fetch('/pages/process_registration.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                registrationForm.style.display = 'none';
                successMessage.style.display = 'block';
                setTimeout(() => {
                    closeModal();
                }, 3000);
            } else {
                alert('Error submitting form. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error submitting form. Please try again.');
        });
    });
});
</script>