import $ from 'jquery';
import waypoints from 'waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';

class StickyHeader {
  constructor() {
    // this.lazyImages = $(".lazyload");
    this.siteHeader = $(".sidenav-small");
    this.headerTriggerElement = $("body");
    this.createHeaderWaypoint();
  }

  createHeaderWaypoint() {
    var that = this;
    new Waypoint({
      element: this.headerTriggerElement[0],
      handler: function(direction) {
        if (direction == "down") {
          that.siteHeader.addClass("site-header--white");
        } else {
          that.siteHeader.removeClass("site-header--white");
        }
      }
    });
  }
}

export default StickyHeader;