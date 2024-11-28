class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallBack() {
        this.innerHTML = 
        /* html */
        `<header>
            <div class="headerWrapper">
                <div class="fullBrand">
                    <div class="logo"><i class="fa-solid fa-laptop"></i></div>
                    <a href="index.html" class="brandName">DoPhu</a>
                </div>  
                <div class="smallSectionsWrapper">
                    <div class="sectionElement">
                        <a href="index.html" class="sectionLink">Home</a>
                    </div> 
           
                    <div class="sectionElement">
                        <a href="detail.html" class="sectionLink">About</a>
                    </div> 
                
                    <div class="sectionElement">
                        <a href="activities.html" class="sectionLink">Activites</a>
                    </div> 
              
                    <div class="sectionElement">
                        <a href="reward.html" class="sectionLink">Reward</a>
                    </div> 
                 
                    <div class="sectionElement">
                        <a href="contact.html" class="sectionLink">Contact</a>
                    </div> 
             
                </div>
            </div>
        </header>`;
    }
}

customElements.define('x-header',Header);