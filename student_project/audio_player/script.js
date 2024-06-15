Amplitude.init({
  bindings: {
    37: 'prev',
    39: 'next',
    32: 'play_pause'
  },
  debug: true,
  visualization: 'michaelbromley_visualization',
  songs: [
    {
      "name": "Haan Hasi Ban Gaye ",
      "artist": "vidya balan",
      "album": "My Songs",
      "url": "hasi.mp3",
      "cover_art_url": "hasi.jpg",
      "visualization": "michaelbromley_visualization"
    },
    {
      "name": "KGF Title Songs",
      "artist": "Yash",
      "album": "My Songs",
      "url": "kgf.mp3",
      "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/ask-the-dust.jpg",
      "visualization": "michaelbromley_visualization"
    },
    {
      "name": "Sultan ",
      "artist": "Salman Khan",
      "album": "My Songs",
      "url": "sultan.mp3",
      "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/anvil.jpg",
      "visualization": "michaelbromley_visualization"
    },
    {
      "name": "Bagi song",
      "artist": "Tiger Shrof",
      "album": "My Songs",
      "url": "bagi.mp3",
      "cover_art_url": "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg",
      "visualization": "michaelbromley_visualization"
    }

  ],

  waveforms: {
      sample_rate: 50
  },

  visualizations: [
    {
      object: MichaelBromleyVisualization,
      params: {

      }
    }
  ]
});

document.getElementsByClassName('visualization-toggle')[0].addEventListener('click', function(){
  if( this.classList.contains( 'visualization-off' ) ){
    this.classList.remove('visualization-off');
    this.classList.add('visualization-on');
    document.getElementById('large-now-playing-album-art').style.display = 'none';
    document.getElementById('large-visualization').style.display = 'block';
  }else{
    this.classList.remove('visualization-on');
    this.classList.add('visualization-off');
    document.getElementById('large-now-playing-album-art').style.display = 'block';
    document.getElementById('large-visualization').style.display = 'none';
  }
});


document.getElementsByClassName('arrow-up-icon')[0].addEventListener('click', function(){
  document.getElementById('visualizations-player-playlist').style.display = 'block';
});

document.getElementsByClassName('arrow-down-icon')[0].addEventListener('click', function(){
  document.getElementById('visualizations-player-playlist').style.display = 'none';
});