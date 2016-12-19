
	// fonctions outils (pour IE<10)
		function addElementClass(theElement, theClass) {
			if ( theElement.classList ) {
				theElement.classList.add( theClass );
			} else {
				theElement.className += ' ' + theClass;
			}
		}
		function removeElementClass(theElement, theClass) {
			if ( theElement.classList ) {
				theElement.classList.remove( theClass );
			} else {
				theElement.className = theElement.className.replace( new RegExp( '(^|\\b)' + theClass.split( ' ' ).join( '|' ) + '(\\b|$)', 'gi' ), ' ' );
			}
		}
		function hasElementClass(theElement, theClass) {
			return theElement.classList ? theElement.classList.contains( theClass ) : new RegExp( '(^| )' + theClass + '( |$)', 'gi' ).test( theElement.className );
		}
		function toggleElementClass(theElement, theClass) { 
			if ( theElement.classList ) {
				theElement.classList.toggle( theClass );
			} else if ( hasElementClass(theElement, theClass) ) {
				removeElementClass(theElement, theClass);
			} else {
				addElementClass(theElement, theClass);
			}
		}
		// mise en œuvre de la bascule
		document.getElementById('bascule').addEventListener('click', function(evt) {
			var cible = document.getElementById(this.getAttribute('data-cible'));
			toggleElementClass(cible, 'actif');
		}, false);
		document.getElementById('bascule').addEventListener('click', function(evt) {
			var cible = document.getElementById('bascule');
			toggleElementClass(cible, 'cross');
		}, false);
	