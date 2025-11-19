// Global Music Player - Persists across page navigation
(function() {
    'use strict';

    // Create a global audio element that persists
    if (!window.globalAudioPlayer) {
        const audio = document.createElement('audio');
        audio.id = 'global-bg-music';
        audio.src = document.querySelector('meta[data-music-path]')?.content || '/music/background-music.mp3';
        
        // Don't use loop attribute - we'll handle looping manually
        audio.style.display = 'none';
        document.body.appendChild(audio);
        
        window.globalAudioPlayer = {
            element: audio,
            isMuted: localStorage.getItem('musicMuted') === 'true',
            savedTime: parseFloat(localStorage.getItem('musicTime')) || 0,
            savedVolume: parseFloat(localStorage.getItem('musicVolume')) || 0.5,
            
            init: function() {
                this.element.volume = this.savedVolume;
                
                // Handle loop manually
                this.element.addEventListener('ended', () => {
                    this.element.currentTime = 0;
                    if (!this.isMuted) {
                        this.element.play().catch(() => {});
                    }
                }, false);
                
                // Save current time before leaving page
                window.addEventListener('beforeunload', () => {
                    localStorage.setItem('musicTime', this.element.currentTime);
                    localStorage.setItem('musicVolume', this.element.volume);
                    localStorage.setItem('musicMuted', this.isMuted);
                });
                
                // Restore playback position
                if (!this.isMuted) {
                    this.element.currentTime = this.savedTime;
                    this.play();
                }
            },
            
            play: function() {
                this.element.play().catch(() => {
                    console.log('Playback failed');
                });
            },
            
            pause: function() {
                this.element.pause();
            },
            
            setVolume: function(vol) {
                this.element.volume = vol;
                this.savedVolume = vol;
            },
            
            toggleMute: function() {
                this.isMuted = !this.isMuted;
                localStorage.setItem('musicMuted', this.isMuted);
                
                if (this.isMuted) {
                    this.pause();
                } else {
                    this.play();
                }
                
                return this.isMuted;
            }
        };
        
        window.globalAudioPlayer.init();
    }
    
    // Update UI elements when they're created
    document.addEventListener('DOMContentLoaded', function() {
        const muteBtn = document.getElementById('mute-btn');
        const volumeSlider = document.getElementById('volume-slider');
        const player = window.globalAudioPlayer;
        
        if (muteBtn) {
            // Set initial button state
            if (player.isMuted) {
                muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
                muteBtn.title = 'Putar musik';
            } else {
                muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                muteBtn.title = 'Matikan musik';
            }
            
            muteBtn.addEventListener('click', () => {
                const muted = player.toggleMute();
                if (muted) {
                    muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
                    muteBtn.title = 'Putar musik';
                } else {
                    muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                    muteBtn.title = 'Matikan musik';
                }
            });
        }
        
        if (volumeSlider) {
            volumeSlider.value = player.savedVolume * 100;
            volumeSlider.addEventListener('input', (e) => {
                const vol = e.target.value / 100;
                player.setVolume(vol);
                
                if (!player.isMuted && player.element.paused) {
                    player.play();
                }
            });
        }
        
        // Auto-play on first load
        if (!player.isMuted && player.element.paused && player.savedTime === 0) {
            player.play();
        }
    });
})();
