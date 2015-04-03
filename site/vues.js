var labelType, useGradients, nativeTextSupport, animate;

(function() {
  var ua = navigator.userAgent,
      iStuff = ua.match(/iPhone/i) || ua.match(/iPad/i),
      typeOfCanvas = typeof HTMLCanvasElement,
      nativeCanvasSupport = (typeOfCanvas == 'object' || typeOfCanvas == 'function'),
      textSupport = nativeCanvasSupport 
        && (typeof document.createElement('canvas').getContext('2d').fillText == 'function');
  //I'm setting this based on the fact that ExCanvas provides text support for IE
  //and that as of today iPhone/iPad current text support is lame
  labelType = (!nativeCanvasSupport || (textSupport && !iStuff))? 'Native' : 'HTML';
  nativeTextSupport = labelType == 'Native';
  useGradients = nativeCanvasSupport;
  animate = !(iStuff || !nativeCanvasSupport);
})();

var Log = {
  elem: false,
  write: function(text){
    if (!this.elem) 
      this.elem = document.getElementById('log');
    this.elem.innerHTML = text;
    this.elem.style.left = (500 - this.elem.offsetWidth / 2) + 'px';
  }
};


function init(){
  // init data
  var json = [
      {
        "adjacencies": [
            
            {
              "nodeTo": "auto",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "automobile",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "machine",
              "nodeFrom": "car",
              "data": {
                "$color": "#red"
              }
            }, {
              "nodeTo": "motorcar",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "railcar",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "railway car",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "railroad car",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "gondola",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "elevator car",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }, {
              "nodeTo": "cable car",
              "nodeFrom": "car",
              "data": {
                "$color": "red"
              }
            }
        ],
        "data": {
          "$color": "red",
          "$type": "circle",
          "$dim": 40
        },
        "id": "car",
        
        
        "name": "car"
      }, {
        "adjacencies": [
            {
              "nodeTo": "automobile",
              "nodeFrom": "auto",
              "data": {
                "$color": "green"
              }
            }, {
              "nodeTo": "machine",
              "nodeFrom": "auto",
              "data": {
                "$color": "green"
              }
            }, {
              "nodeTo": "motorcar",
              "nodeFrom": "auto",
              "data": {
                "$color": "green"
              }
            }
        ],
        "data": {
          "$color": "green",
          "$type": "circle",
          "$dim": 20
        },
        "id": "auto",
        "name": "auto"
      }, {
        "adjacencies": [
            {
              "nodeTo": "machine",
              "nodeFrom": "automobile",
              "data": {
                "$color": "purple"
              }
            }, {
              "nodeTo": "motorcar",
              "nodeFrom": "purple",
              "data": {
                "$color": "purple"
              }
            }
        ],
        "data": {
          "$color": "purple",
          "$type": "circle",
          "$dim": 20
        },
        "id": "automobile",
        "name": "automobile"
      }, {
        "adjacencies": [],
        "data": {
          "$color": "yellow",
          "$type": "circle",
          "$dim": 20
        },
        "id": "machine",
        "name": "machine"
      }, {
        "adjacencies": [],
        "data": {
          "$color": "blue",
          "$type": "circle",
          "$dim": 20
        },
        "id": "motorcar",
        "name": "motorcar"
      },{
        "adjacencies": [],
        "data": {
          "$color": "gold",
          "$type": "circle",
          "$dim": 20
        },
        "id": "railcar",
        "name": "railcar"
      },{
        "adjacencies": [],
        "data": {
          "$color": "yellowgreen",
          "$type": "circle",
          "$dim": 20
        },
        "id": "railway car",
        "name": "railway car"
      },{
        "adjacencies": [],
        "data": {
          "$color": "cyan",
          "$type": "circle",
          "$dim": 20
        },
        "id": "railroad car",
        "name": "railroad car"
      },{
        "adjacencies": [],
        "data": {
          "$color": "#83548B",
          "$type": "circle",
          "$dim": 20
        },
        "id": "gondola",
        "name": "gondola"
      },{
        "adjacencies": [],
        "data": {
          "$color": "brown",
          "$type": "circle",
          "$dim": 20
        },
        "id": "elevator car",
        "name": "elevator car"
      },{
        "adjacencies": [],
        "data": {
          "$color": "silver",
          "$type": "circle",
          "$dim": 20
        },
        "id": "cable car",
        "name": "cable car"
      },
  ];
  // end
  
  
  // init ForceDirected
  var fd = new $jit.ForceDirected({
    //id of the visualization container
    injectInto: 'infovis',
    //Enable zooming and panning
    //by scrolling and DnD
    Navigation: {
      enable: true,
      //Enable panning events only if we're dragging the empty
      //canvas (and not a node).
      panning: 'avoid nodes',
      zooming: 10 //zoom speed. higher is more sensible
    },
    // Change node and edge styles such as
    // color and width.
    // These properties are also set per node
    // with dollar prefixed data-properties in the
    // JSON structure.
    Node: {
      overridable: true
    },
    Edge: {
      overridable: true,
      color: '#23A4FF',
      lineWidth: 0.8
    },
    //Native canvas text styling
    Label: {
      type: labelType, //Native or HTML
      size: 10,
      style: 'bold'
    },
    //Add Tips
    Tips: {
      enable: true,
      onShow: function(tip, node) {
        //compte le nombre de connections d'un noeud
        var count = 0;
        node.eachAdjacency(function() { count++; });
        //display node info in tooltip
        tip.innerHTML = "<div class=\"tip-title\">" + node.name + "</div>"
          + "<div class=\"tip-text\"><b>connections:</b> " + count + "</div>";
      }
    },
    // Add node events
    Events: {
      enable: true,
      type: 'Native',
      //Change le style du curseur quand il rencontre un noeud
      onMouseEnter: function() {
        fd.canvas.getElement().style.cursor = 'move';
      },
      onMouseLeave: function() {
        fd.canvas.getElement().style.cursor = '';
      },
      //Update node positions when dragged
      onDragMove: function(node, eventInfo, e) {
          var pos = eventInfo.getPos();
          node.pos.setc(pos.x, pos.y);
          fd.plot();
      },
      //Implement the same handler for touchscreens
      onTouchMove: function(node, eventInfo, e) {
        $jit.util.event.stop(e); //stop default touchmove event
        this.onDragMove(node, eventInfo, e);
      },
      //Add also a click handler to nodes
      onClick: function(node) {
        if(!node) return;
        // Build the right column relations list.
        // This is done by traversing the clicked node connections.
        var html = "<h4>" + node.name + "</h4><b> connections:</b><ul><li>",
            list = [];
        node.eachAdjacency(function(adj){
          list.push(adj.nodeTo.name);
        });
        //append connections information
        $jit.id('inner-details').innerHTML = html + list.join("</li><li>") + "</li></ul>";
      }
    },
    //Met les noeuds par défaut à une certaine distance
    //Number of iterations for the FD algorithm
    iterations: 200,
    //Edge length
    levelDistance: 130,
    // Add text to the labels. This method is only triggered
    // on label creation and only for DOM labels (not native canvas ones).
    onCreateLabel: function(domElement, node){
      domElement.innerHTML = node.name;
      var style = domElement.style;
      style.fontSize = "0.8em";
      style.color = "#ddd";
    },
    // Change node styles when DOM labels are placed
    // or moved.
    onPlaceLabel: function(domElement, node){
      var style = domElement.style;
      var left = parseInt(style.left);
      var top = parseInt(style.top);
      var w = domElement.offsetWidth;
      style.left = (left - w / 2) + 'px';
      style.top = (top + 10) + 'px';
      style.display = '';
    }
  });
  // load JSON data.
  fd.loadJSON(json);
  // compute positions incrementally and animate.
  fd.computeIncremental({
    iter: 40,
    property: 'end',
    onStep: function(perc){
      Log.write(perc + '% loaded...');
    },
    onComplete: function(){
      Log.write('');
      fd.animate({
        modes: ['linear'],
        transition: $jit.Trans.Elastic.easeOut,
        duration: 2500
      });
    }
  });
  // end
}
