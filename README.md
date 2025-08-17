# Fancode HLS Proxy (PHP)

This is a simple PHP proxy to make **Fancode HLS streams** accessible worldwide.

## 🚀 Usage
1. Upload `proxy.php` to your PHP hosting or GitHub + 000webhost/InfinityFree.
2. Access the proxy URL:https://yourdomain.com/proxy.php
3. This will serve the main `index.m3u8`.

3. The `.m3u8` playlist will automatically rewrite `.ts` chunk paths to go through the proxy.

## 🔗 Example
If hosted at:https://example.com/proxy.php
Then add this URL into any HLS player (VLC, IPTV app, etc.) and it will stream worldwide.

⚠️ Note: Works only with **non-DRM streams**.
