let navbar = document.querySelector('.header .navbar');
document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.add('active');
}
document.querySelector('#nav-close').onclick = () =>{
    navbar.classList.remove('active');
}

//----------- Professional Search Implementation ----------------//
class ProfessionalSearch {
    constructor() {
        this.searchBtn = document.getElementById('search-btn');
        this.closeSearch = document.getElementById('close-search');
        this.searchForm = document.querySelector('.search-form');
        this.searchInput = document.getElementById('search-box');
        this.resultsContainer = null;
        this.isOpen = false;
        
        this.searchData = [
            { name: 'Sigiriya Rock Fortress', section: '#packages', keywords: ['sigiriya', 'rock', 'fortress', 'ancient', 'unesco'] },
            { name: 'Kandy Temple of Tooth', section: '#packages', keywords: ['kandy', 'temple', 'tooth', 'cultural', 'buddhist'] },
            { name: 'Ella Train Journey', section: '#packages', keywords: ['ella', 'train', 'mountain', 'scenic', 'railway'] },
            { name: 'Mirissa Beach', section: '#packages', keywords: ['mirissa', 'beach', 'whale', 'watching', 'surfing'] },
            { name: 'Yala Safari', section: '#packages', keywords: ['yala', 'safari', 'wildlife', 'leopard', 'national park'] },
            { name: 'Tea Plantation Tours', section: '#packages', keywords: ['tea', 'plantation', 'nuwara eliya', 'highlands'] },
            { name: 'Adventure Tours', section: '#category', keywords: ['adventure', 'hiking', 'rafting', 'zip line'] },
            { name: 'Cultural Tours', section: '#packages', keywords: ['cultural', 'heritage', 'temple', 'history'] },
            { name: 'Beach Holidays', section: '#packages', keywords: ['beach', 'holiday', 'coastal', 'relaxation'] },
            { name: 'Wildlife Safari', section: '#packages', keywords: ['wildlife', 'safari', 'animals', 'nature'] },
            { name: 'Tour Packages', section: '#packages', keywords: ['packages', 'tours', 'deals', 'booking'] },
            { name: 'Customer Reviews', section: '#testimonials', keywords: ['reviews', 'testimonials', 'feedback'] },
            { name: 'Contact Us', section: '#contact', keywords: ['contact', 'booking', 'inquiry', 'support'] }
        ];
        
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        // Open search
        if (this.searchBtn) {
            this.searchBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openSearch();
            });
        }

        // Close search
        if (this.closeSearch) {
            this.closeSearch.addEventListener('click', (e) => {
                e.preventDefault();
                this.closeSearch();
            });
        }

        // Close with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isOpen) {
                this.closeSearch();
            }
        });

        // Close when clicking outside
        if (this.searchForm) {
            this.searchForm.addEventListener('click', (e) => {
                if (e.target === this.searchForm) {
                    this.closeSearch();
                }
            });
        }

        // Search input events
        if (this.searchInput) {
            this.searchInput.addEventListener('input', (e) => {
                this.handleSearch(e.target.value);
            });

            this.searchInput.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.selectFirstResult();
                }
            });
        }
    }

    openSearch() {
        if (this.searchForm) {
            this.searchForm.classList.add('active');
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
            
            setTimeout(() => {
                if (this.searchInput) {
                    this.searchInput.focus();
                }
            }, 300);
        }
    }

    closeSearch() {
        if (this.searchForm) {
            this.searchForm.classList.remove('active');
            this.isOpen = false;
            document.body.style.overflow = '';
            
            if (this.searchInput) {
                this.searchInput.value = '';
            }
            this.clearResults();
        }
    }

    handleSearch(query) {
        if (!query || query.length < 2) {
            this.clearResults();
            return;
        }

        const results = this.searchData.filter(item => {
            return item.name.toLowerCase().includes(query.toLowerCase()) ||
                   item.keywords.some(keyword => keyword.includes(query.toLowerCase()));
        });

        this.displayResults(results, query);
    }

    displayResults(results, query) {
        this.clearResults();

        if (results.length === 0) {
            this.showNoResults(query);
            return;
        }

        this.resultsContainer = document.createElement('div');
        this.resultsContainer.className = 'search-results';

        const resultsList = results.slice(0, 6).map(result => `
            <div class="search-result" data-section="${result.section}">
                <div class="result-icon">
                    <i class="fas fa-${this.getResultIcon(result.section)}"></i>
                </div>
                <div class="result-content">
                    <h4>${this.highlightMatch(result.name, query)}</h4>
                    <p>Click to explore ${result.name.toLowerCase()}</p>
                </div>
                <div class="result-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        `).join('');

        this.resultsContainer.innerHTML = `
            <div class="results-header">
                <span class="results-count">${results.length} result${results.length !== 1 ? 's' : ''} found</span>
            </div>
            ${resultsList}
        `;

        const form = this.searchForm.querySelector('form');
        if (form) {
            form.appendChild(this.resultsContainer);
        }

        // Add click handlers
        this.resultsContainer.querySelectorAll('.search-result').forEach(result => {
            result.addEventListener('click', () => {
                const section = result.getAttribute('data-section');
                this.navigateToSection(section);
            });
        });
    }

    showNoResults(query) {
        this.resultsContainer = document.createElement('div');
        this.resultsContainer.className = 'search-no-results';
        this.resultsContainer.innerHTML = `
            <div class="no-results-icon">
                <i class="fas fa-search"></i>
            </div>
            <h4>No results for "${query}"</h4>
            <p>Try searching for destinations, activities, or tour packages</p>
            <div class="search-suggestions">
                <span>Popular searches:</span>
                <button onclick="window.professionalSearch.searchInput.value='Sigiriya'; window.professionalSearch.handleSearch('Sigiriya');">Sigiriya</button>
                <button onclick="window.professionalSearch.searchInput.value='Safari'; window.professionalSearch.handleSearch('Safari');">Safari</button>
                <button onclick="window.professionalSearch.searchInput.value='Beach'; window.professionalSearch.handleSearch('Beach');">Beach</button>
            </div>
        `;

        const form = this.searchForm.querySelector('form');
        if (form) {
            form.appendChild(this.resultsContainer);
        }
    }

    clearResults() {
        if (this.resultsContainer) {
            this.resultsContainer.remove();
            this.resultsContainer = null;
        }
    }

    selectFirstResult() {
        const firstResult = this.resultsContainer?.querySelector('.search-result');
        if (firstResult) {
            const section = firstResult.getAttribute('data-section');
            this.navigateToSection(section);
        }
    }

    navigateToSection(section) {
        this.closeSearch();
        
        const target = document.querySelector(section);
        if (target) {
            const headerHeight = document.querySelector('.header')?.offsetHeight || 80;
            const targetPosition = target.offsetTop - headerHeight - 20;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            // Highlight effect
            target.style.transition = 'box-shadow 0.3s ease';
            target.style.boxShadow = '0 0 30px rgba(255, 99, 71, 0.4)';
            setTimeout(() => {
                target.style.boxShadow = '';
            }, 2000);
        }
    }

    highlightMatch(text, query) {
        if (!query) return text;
        const regex = new RegExp(`(${query})`, 'gi');
        return text.replace(regex, '<mark>$1</mark>');
    }

    getResultIcon(section) {
        const icons = {
            '#packages': 'map-marked-alt',
            '#category': 'hiking',
            '#testimonials': 'star',
            '#contact': 'envelope'
        };
        return icons[section] || 'map-marker-alt';
    }
}

// Initialize search
document.addEventListener('DOMContentLoaded', () => {
    window.professionalSearch = new ProfessionalSearch();
});

// Function to handle header state on scroll
const handleHeaderScroll = () => {
    // Close mobile navbar if open
    navbar.classList.remove('active');
    
    const header = document.querySelector('.header');
    
    // Add header active class on scroll
    if (window.scrollY > 0) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
};

// Add scroll event listener with passive option for better performance
window.addEventListener('scroll', handleHeaderScroll, { passive: true });

// Initial check when page loads
window.addEventListener('load', handleHeaderScroll);

// handle increase/decrease buttons for adults & children
document.querySelectorAll('.increase').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    target.value = parseInt(target.value) + 1;
  });
});

document.querySelectorAll('.decrease').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target);
    if (parseInt(target.value) > 0) { // don't go below 0
      target.value = parseInt(target.value) - 1;
    }
  });
});

// Enhanced Reviews/Testimonials Navigation
document.addEventListener('DOMContentLoaded', function() {
    const reviewsLink = document.querySelector('.reviews-link');
    const testimonialsSection = document.getElementById('testimonials');
    
    if (reviewsLink && testimonialsSection) {
        reviewsLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Close mobile navbar if open
            navbar.classList.remove('active');
            
            // Add a subtle highlight effect before scrolling
            reviewsLink.style.transform = 'scale(1.1) translateY(-3px)';
            reviewsLink.style.boxShadow = '0 8px 25px rgba(255, 99, 71, 0.5)';
            
            setTimeout(() => {
                reviewsLink.style.transform = '';
                reviewsLink.style.boxShadow = '';
            }, 300);
            
            // Smooth scroll to testimonials with offset for fixed header
            const headerHeight = document.querySelector('.header').offsetHeight;
            const targetPosition = testimonialsSection.offsetTop - headerHeight - 20;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
            
            // Highlight testimonials section briefly
            setTimeout(() => {
                testimonialsSection.style.boxShadow = '0 0 30px rgba(255, 99, 71, 0.3)';
                testimonialsSection.style.transform = 'scale(1.01)';
                testimonialsSection.style.transition = 'all 0.3s ease';
                
                setTimeout(() => {
                    testimonialsSection.style.boxShadow = '';
                    testimonialsSection.style.transform = '';
                }, 1000);
            }, 800);
            
            console.log('Navigating to testimonials section');
        });
    }
    
    // Add active state to navbar links based on scroll position
    function updateActiveNavLink() {
        const sections = ['home', 'category', 'packages', 'testimonials', 'contact'];
        const header = document.querySelector('.header');
        const headerHeight = header ? header.offsetHeight : 80;
        const scrollPos = window.scrollY + headerHeight + 50;
        
        let currentActiveSection = null;
        let minDistance = Infinity;
        
        // Find the section that's currently in view
        sections.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                // Check if section is in viewport
                if (scrollPos >= sectionTop && scrollPos <= sectionBottom) {
                    const distanceFromTop = Math.abs(scrollPos - sectionTop);
                    if (distanceFromTop < minDistance) {
                        minDistance = distanceFromTop;
                        currentActiveSection = sectionId;
                    }
                }
            }
        });
        
        // If no section is exactly in view, find the closest one
        if (!currentActiveSection) {
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    const sectionTop = section.offsetTop;
                    const distance = Math.abs(scrollPos - sectionTop);
                    if (distance < minDistance) {
                        minDistance = distance;
                        currentActiveSection = sectionId;
                    }
                }
            });
        }
        
        // Update nav links
        if (currentActiveSection) {
            // Remove active class from all nav links
            document.querySelectorAll('.navbar a').forEach(link => {
                link.classList.remove('nav-active');
            });
            
            // Add active class to current section's nav link
            const activeNavLink = document.querySelector(`[href="#${currentActiveSection}"]`);
            if (activeNavLink) {
                activeNavLink.classList.add('nav-active');
                console.log('Active section:', currentActiveSection);
            }
        }
    }
    
    // Enhanced scroll event with throttling
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            updateActiveNavLink();
        }, 10);
    }, { passive: true });
    
    // Initial call to set active state
    updateActiveNavLink();
    
    console.log('Reviews navigation enhanced with improved scroll detection');
});