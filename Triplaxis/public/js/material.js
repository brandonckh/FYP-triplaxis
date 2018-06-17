
document.addEventListener('DOMContentLoaded', function(event){
    document.getElementById('close').addEventListener('mouseup', function(){
            document.getElementById('search-bar').className += "mat-header-search"
    })
    document.getElementById('search').addEventListener('mouseup', function(){
            document.getElementById('search-bar').className += " unhide"
    })
    window.addEventListener('scroll', function(e) {
          if(this.oldScroll < this.scrollY){
            document.getElementById("hide-on-scroll").className = "hide mat-page"
          } else {
            document.getElementById("hide-on-scroll").className = "mat-page"
          }
          this.oldScroll = this.scrollY;
              
    });

})
