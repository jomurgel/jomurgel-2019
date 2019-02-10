/**
 * Initialize the Logo on the Homepage.
 */
export const initHomeLogo = () => {

  // Let's trigger that awesome logoness.
  document.addEventListener( 'DOMContentLoaded', () => {

    const line = document.querySelector( '.sig-line' );
    const dot  = document.querySelector( '.sig-dot' );

    setTimeout( () => {
      line.classList.add( 'loaded' );
      dot.classList.add( 'loaded' );
    }, 2500 )
  });
}

/**
 * Initialize the Logo.
 */
export const initLogo = () => {

  // Let's trigger that awesome logoness.
  document.addEventListener( 'DOMContentLoaded', () => {

    const line = document.querySelector( '.sig-line' );
    const dot  = document.querySelector( '.sig-dot' );

    line.classList.add( 'loaded' );
    dot.classList.add( 'loaded' );
  });
}
