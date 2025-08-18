export default {
  async fetch(request) {
    let url = "https://in-mc-fdlive.fancode.com/mumbai/133234_english_hls_185276fe1c35207ta-di_h264/index.m3u8";

    let res = await fetch(url, {
      headers: {
        "User-Agent": request.headers.get("User-Agent") || "Mozilla/5.0",
      }
    });

    return new Response(res.body, {
      status: res.status,
      headers: {
        "Content-Type": "application/vnd.apple.mpegurl",
        "Access-Control-Allow-Origin": "*",
      },
    });
  }
}
