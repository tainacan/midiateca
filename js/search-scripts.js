// Checks if document is loaded
const performWhenDocumentIsLoaded = callback => {
    if (/comp|inter|loaded/.test(document.readyState))
        cb();
    else
        document.addEventListener('DOMContentLoaded', callback, false);
}


/* Sets facets search bar to affect all facets list blocks on the Inventario page */
function syncFacetsBlockWithSearchBar() {
    let facetsSearchBar = document.getElementsByClassName('midiateca-facets-search-bar');
    if (facetsSearchBar && facetsSearchBar.length) {
        facetsSearchBar = facetsSearchBar[0];
        let facetsSearchBarInput = facetsSearchBar.getElementsByClassName('wp-block-search__input');
        if (facetsSearchBarInput && facetsSearchBarInput.length) {

            let facets = document.getElementsByClassName('wp-block-tainacan-facets-list');

            if (facets && facets.length) {
                facetsSearchBarInput = facetsSearchBarInput[0];
                facetsSearchBarInput.oninput = (event) => {
                    if (event && event.target) {
                        for (let i = 0; i < facets.length; i++) {
                            facets[i].dispatchEvent(new CustomEvent('tainacan-blocks-facets-list-update', {detail: { searchString: event.target.value }}))
                        }
                    }
                }
            }
        }
    }
}

/* Click event on the facets collapse inside the search modal */
function setClickEventsOfSearchModalFacetsList() {
    let searchModalFacetsList = document.getElementsByClassName('midiateca-search-modal-facets-list__header');
    if (searchModalFacetsList && searchModalFacetsList.length) {
        searchModalFacetsList = searchModalFacetsList[0].children;
        for (let detail of searchModalFacetsList) {
            if (detail.children && detail.children[0] && detail.children[0].nodeName == 'SUMMARY') {
                detail.children[0].onclick = () => {
                    for (let otherDetail of searchModalFacetsList) {
                        if (detail != otherDetail && otherDetail.children && otherDetail.children[0] && otherDetail.children[0].nodeName == 'SUMMARY')
                            otherDetail.open = false;
                    }
                }
            }
        }
    }
}


function addTaxonomiesToSearchModal() {
    if ( ctEvents ) {
        ctEvents.on('ct:modal:opened', ($element) => {
            if ($element && $element.id === 'search-modal') {
                
                const modalTaxonomies = $element.querySelector('.midiateca-search-modal-facets-list');
                if (!modalTaxonomies) {

                    const modalForm = $element.querySelector('.search-form');

                    if ( modalForm ) {
                        modalForm.outerHTML += `<div class="loading-modal-taxonomy">
                            <svg class="spinner" viewBox="0 0 50 50">
                                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                            </svg>
                        </div>`; 
                        fetch('/site/wp-admin/admin-ajax.php?action=midiateca_add_facets_to_search_modal', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
                        })
                        .then(response => response.text())
                        .then(data => {
                            const loadingStateIndicator = $element.querySelector('.loading-modal-taxonomy');
                            loadingStateIndicator.remove();

                            const modalForm = $element.querySelector('.search-form');
                            modalForm.outerHTML += data;

                            setClickEventsOfSearchModalFacetsList();
                        });
                    }
                }
                
            }
        });
    }
}

performWhenDocumentIsLoaded(() => {
    syncFacetsBlockWithSearchBar();
    addTaxonomiesToSearchModal();
});