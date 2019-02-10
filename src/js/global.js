import { initMenu } from './util/menu';
import { initSearch } from './util/search';
import { initLogo, initHomeLogo } from './util/logo';

import { hasClass } from './util/helpers';

/**
 * Init Menu JS.
 * Prevent the function to run before the document is loaded
 */
document.addEventListener( 'readystatechange', () => {
  if ( 'complete' === document.readyState ) {
    initMenu();
    initSearch();
  }
} );

const body = document.getElementsByTagName( 'body' )[0];

if ( hasClass( body, 'home blog' ) ) {
  initHomeLogo();
} else {
  initLogo();
}
