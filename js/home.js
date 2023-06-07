import { gsap } from 'gsap';
export function Home() {

    gsap.to('.animation', {
      x: "40%",
      color: "blue",
      duration: 3,
      ease: 'bounce.out'
    });
    
}
