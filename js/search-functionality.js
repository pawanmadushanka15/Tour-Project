/**
 * Enhanced Search Functionality
 * Provides real-time search across tour packages and destinations
 */

class TourSearch {
    constructor() {
        this.searchBtn = document.getElementById('search-btn');
        this.closeSearch = document.getElementById('close-search');
        this.searchForm = document.querySelector('.search-form');
        this.searchInput = document.getElementById('search-box');
        this.searchableContent = [];
        this.isSearchOpen = false;
        
        this.init();
    }

    init() {
        this.collectSearchableContent();
        this.bindEvents();
        this.setupAutocomplete();
    }

    /**
     * Collect all searchable content from the page
     */
    collectSearchableContent() {
        // Collect package titles and destinations
        const packages = document.querySelectorAll('.packages .box');
        const categories = document.querySelectorAll('.category .box');
        const headings = document.querySelectorAll('h1, h2, h3');
        
        packages.forEach(pkg => {
            const title = pkg.querySelector('h3')?.textContent?.trim();
            const description = pkg.querySelector('p')?.textContent?.trim();
            const link = pkg.querySelector('a')?.href;
            
            if (title) {
                this.searchableContent.push({
                    type: 'package',
                    title: title,
                    description: description || '',
                    element: pkg,
                    link: link || '#packages',
                    keywords: (title + ' ' + (description || '')).toLowerCase()
                });
            }
        });

        // Collect adventure categories
        categories.forEach(cat => {
            const title = cat.querySelector('h3')?.textContent?.trim();
            const description = cat.querySelector('p')?.textContent?.trim();
            const link = cat.querySelector('a')?.href;
            
            if (title) {
                this.searchableContent.push({
                    type: 'adventure',
                    title: title,
                    description: description || '',
                    element: cat,
                    link: link || '#category',
                    keywords: (title + ' ' + (description || '')).toLowerCase()
                });
            }
        });

        // Add popular destinations manually
        const destinations = [
            { name: 'Sigiriya', keywords: 'sigiriya rock fortress ancient' },
            { name: 'Kandy', keywords: 'kandy temple tooth cultural' },
            { name: 'Ella', keywords: 'ella train ride mountain' },
            { name: 'Mirissa', keywords: 'mirissa beach whale watching' },
            { name: 'Yala', keywords: 'yala safari wildlife national park' },
            { name: 'Nuwara Eliya', keywords: 'nuwara eliya tea plantation' },
            { name: 'Galle', keywords: 'galle fort historical' },
            { name: 'Colombo', keywords: 'colombo city capital' }
        ];

        destinations.forEach(dest => {
            this.searchableContent.push({
                type: 'destination',
                title: dest.name,
                description: `Explore ${dest.name}`,
                element: null,
                link: '#packages',
                keywords: dest.keywords
            });
        });
    }

    /**
     * Bind all event listeners
     */
    bindEvents() {
        // Search button click
        if (this.searchBtn) {
            this.searchBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openSearch();
            });
        }

        // Close search button
        if (this.closeSearch) {
            this.closeSearch.addEventListener('click', (e) => {
                e.preventDefault();
                this.closeSearch();
            });
        }

        // Close search with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isSearchOpen) {
                this.closeSearch();
            }
        });

        // Close search when clicking outside
        if (this.searchForm) {
            this.searchForm.addEventListener('click', (e) => {
                if (e.target === this.searchForm) {
                    this.closeSearch();
                }
            });
        }

        // Real-time search
        if (this.searchInput) {
            this.searchInput.addEventListener('input', (e) => {
                this.performSearch(e.target.value);
            });

            this.searchInput.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.handleSearchSubmit(e.target.value);
                }
            });
        }
    }

    /**
     * Open search overlay
     */
    openSearch() {
        if (this.searchForm) {
            this.searchForm.classList.add('active');
            this.isSearchOpen = true;
            
            // Focus on search input
            setTimeout(() => {
                if (this.searchInput) {
                    this.searchInput.focus();
                }
            }, 300);

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }
    }

    /**
     * Close search overlay
     */
    closeSearch() {
        if (this.searchForm) {
            this.searchForm.classList.remove('active');
            this.isSearchOpen = false;
            
            // Clear search
            if (this.searchInput) {
                this.searchInput.value = '';
            }
            this.clearSearchResults();

            // Restore body scroll
            document.body.style.overflow = '';
        }
    }

    /**
     * Perform real-time search
     */
    performSearch(query) {
        if (!query || query.length < 2) {
            this.clearSearchResults();
            return;
        }

        const results = this.searchableContent.filter(item => 
            item.keywords.includes(query.toLowerCase()) ||
            item.title.toLowerCase().includes(query.toLowerCase())
        );

        this.displaySearchResults(results, query);
    }

    /**
     * Display search results
     */
    displaySearchResults(results, query) {
        // Remove existing results
        this.clearSearchResults();

        if (results.length === 0) {
            this.showNoResults(query);
            return;
        }

        // Create results container
        const resultsContainer = document.createElement('div');
        resultsContainer.className = 'search-results';
        resultsContainer.innerHTML = `
            <div class="search-results-header">
                <h3>Search Results for "${query}" (${results.length})</h3>
            </div>
            <div class="search-results-list">
                ${results.slice(0, 8).map(result => `
                    <div class="search-result-item" data-type="${result.type}" data-link="${result.link}">
                        <div class="result-type">${result.type}</div>
                        <h4>${this.highlightMatch(result.title, query)}</h4>
                        <p>${this.highlightMatch(result.description, query)}</p>
                    </div>
                `).join('')}
            </div>
        `;

        // Add to search form
        const form = this.searchForm.querySelector('form');
        if (form) {
            form.appendChild(resultsContainer);
        }

        // Add click handlers to results
        resultsContainer.querySelectorAll('.search-result-item').forEach(item => {
            item.addEventListener('click', () => {
                const link = item.getAttribute('data-link');
                this.navigateToResult(link);
            });
        });
    }

    /**
     * Show no results message
     */
    showNoResults(query) {
        const noResults = document.createElement('div');
        noResults.className = 'search-no-results';
        noResults.innerHTML = `
            <div class="no-results-content">
                <i class="fas fa-search"></i>
                <h3>No results found for "${query}"</h3>
                <p>Try searching for:</p>
                <ul>
                    <li>Popular destinations (Sigiriya, Kandy, Ella)</li>
                    <li>Activities (Safari, Beach, Cultural)</li>
                    <li>Tour packages</li>
                </ul>
            </div>
        `;

        const form = this.searchForm.querySelector('form');
        if (form) {
            form.appendChild(noResults);
        }
    }

    /**
     * Clear search results
     */
    clearSearchResults() {
        const existing = this.searchForm?.querySelectorAll('.search-results, .search-no-results');
        existing?.forEach(el => el.remove());
    }

    /**
     * Highlight matching text
     */
    highlightMatch(text, query) {
        if (!text || !query) return text;
        
        const regex = new RegExp(`(${query})`, 'gi');
        return text.replace(regex, '<mark>$1</mark>');
    }

    /**
     * Navigate to search result
     */
    navigateToResult(link) {
        this.closeSearch();
        
        if (link.startsWith('#')) {
            // Smooth scroll to section
            const target = document.querySelector(link);
            if (target) {
                const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        } else {
            // External link
            window.open(link, '_blank');
        }
    }

    /**
     * Handle search form submission
     */
    handleSearchSubmit(query) {
        if (!query) return;

        // Perform search and navigate to first result
        const results = this.searchableContent.filter(item => 
            item.keywords.includes(query.toLowerCase()) ||
            item.title.toLowerCase().includes(query.toLowerCase())
        );

        if (results.length > 0) {
            this.navigateToResult(results[0].link);
        }
    }

    /**
     * Setup autocomplete functionality
     */
    setupAutocomplete() {
        if (!this.searchInput) return;

        const suggestions = [
            'Sigiriya Rock Fortress',
            'Kandy Temple of Tooth',
            'Ella Train Ride',
            'Yala Safari',
            'Mirissa Beach',
            'Tea Plantation Tours',
            'Cultural Tours',
            'Wildlife Safari',
            'Beach Holidays',
            'Adventure Tours'
        ];

        this.searchInput.setAttribute('list', 'search-suggestions');
        
        // Create datalist if it doesn't exist
        let datalist = document.getElementById('search-suggestions');
        if (!datalist) {
            datalist = document.createElement('datalist');
            datalist.id = 'search-suggestions';
            suggestions.forEach(suggestion => {
                const option = document.createElement('option');
                option.value = suggestion;
                datalist.appendChild(option);
            });
            document.body.appendChild(datalist);
        }
    }
}

// Initialize search functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const tourSearch = new TourSearch();
    
    // Make it globally accessible
    window.tourSearch = tourSearch;
    
    console.log('Search functionality initialized');
});